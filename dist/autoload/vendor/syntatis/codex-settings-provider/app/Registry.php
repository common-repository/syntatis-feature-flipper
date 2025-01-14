<?php

declare (strict_types=1);
namespace SSFV\Codex\Settings;

use SSFV\Codex\Settings\Contracts\SettingItem;
use InvalidArgumentException;
use function strlen;
use function strncmp;
class Registry
{
    private string $prefix = '';
    /** @phpstan-var non-empty-string $settingGroup */
    private string $settingGroup;
    /** @var array<string,RecordedSetting> */
    private array $settings = [];
    /**
     * List of settings that have been registered.
     *
     * @var array<string,RecordedSetting>
     */
    private array $registered = [];
    public function __construct(string $settingGroup, string $prefix = '')
    {
        if (is_blank($settingGroup)) {
            throw new InvalidArgumentException('The setting group cannot be empty.');
        }
        $this->settingGroup = $settingGroup;
        $this->prefix = $prefix;
    }
    public function addSettings(SettingItem ...$settings) : void
    {
        foreach ($settings as $key => $setting) {
            $recorded = new RecordedSetting($setting, $this->prefix);
            $this->settings[$recorded->getName()] = $recorded;
        }
    }
    /**
     * Retrieve the setting group that the registry is handling.
     */
    public function getSettingGroup() : string
    {
        return $this->settingGroup;
    }
    /**
     * Retrieve all the settings that's been added in the registry or one with specific name.
     *
     * @return array<string,RecordedSetting>|RecordedSetting|null
     */
    public function getSettings(?string $name = null)
    {
        if (!is_blank($name)) {
            return $this->settings[$this->maybePrefixed($name)] ?? null;
        }
        return $this->settings;
    }
    public function register() : void
    {
        foreach ($this->settings as $recorded) {
            register_setting($this->settingGroup, $recorded->getName(), $recorded->getArgs());
        }
    }
    /**
     * Remove options from the registry.
     *
     * @param bool $delete Whether to delete the options from the database.
     */
    public function deregister(bool $delete = \false) : void
    {
        foreach ($this->settings as $recorded) {
            $prefixedName = $recorded->getName();
            unregister_setting($this->settingGroup, $prefixedName);
            unset($this->registered[$prefixedName]);
            if ($delete !== \true) {
                continue;
            }
            delete_option($prefixedName);
        }
    }
    /** @param string $name The setting name */
    private function maybePrefixed(string $name) : string
    {
        if (strncmp($name, $this->prefix, strlen($this->prefix)) === 0) {
            return $name;
        }
        return $this->prefix . $name;
    }
}
