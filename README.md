# Kirby Version Widget
![Version](https://img.shields.io/badge/version-1.1.0-green.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)
![Kirby Version](https://img.shields.io/badge/Kirby-2.3%2B-red.svg)

Panel dashboard widget displaying installed and latest version with link to changelog for [Kirby](http://getkirby.com).

![Kirby Version Widget screenshot Latest version](https://github.com/Thiousi/kirby-version-widget/blob/master/latest.jpg)

## Installation

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following command in your shell from the root folder of your Kirby installation:

```
kirby plugin:install Thiousi/kirby-version-widget
```

### 2. Manual
[Download this archive](https://github.com/Thiousi/kirby-version-widget/archive/master.zip), extract it and rename it to `version-widget`. Copy the folder to your `site/plugins` folder.

### 3. Git Submodule
If you know your way around git, you can download this as a submodule:

```
$ git submodule add https://github.com/Thiousi/kirby-version-widget site/plugins/version-widget
```

## Usage
You don't have anything to do once the widget is installed. The widget has two states:

### 1. Latest version is installed

![Kirby Version Widget screenshot Latest version](https://github.com/Thiousi/kirby-version-widget/blob/master/latestversion.pgn)

### 2. New version available
When a new version is available, clicking on the version number will redirect to the Kirby Changelog for that version.
![Kirby Version Widget screenshot New version](https://github.com/Thiousi/kirby-version-widget/blob/master/newversion.png)

## To-do
- [ ] Display the widget only for admin role (with option in config)
- [ ] Make it multi-lingual
- [X] ~~Update readme~~
- [X] ~~Make it CLI and submodule compatible~~

## Credits
- [@jenstornell](https://github.com/jenstornell) for his feedback.
- Inspired by [kirby version by Fabian Sperrle.](https://github.com/FabianSperrle/kirby-version)

## License
MIT

## Changelog
### 1.0.0
- Initialial release

### 1.1.0
- Changed colors to default panel colors
- Made CLI compatible
- Made Submodule compatible
- Enhanced Readme
- Updated screenshots
- Fixed icon
- Added chain icon on new version message
- Fixed compressed headline and spacing issues
