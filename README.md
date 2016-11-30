# nyg-jam3

[![stable](http://badges.github.io/stability-badges/dist/stable.svg)](http://github.com/badges/stability-badges)

Jam3 project scaffold based on [nyg](https://www.npmjs.com/package/nyg). Used to create the basic files needed for a Jam3 project.

## Usage

[![NPM](https://nodei.co/npm/nyg-jam3.png)](https://www.npmjs.com/package/nyg-jam3)

The nyg generator is designed to function similar to yeoman. To get it running, simply follow these steps:

```bash
npm i nyg -g
npm i nyg-jam3 -g
cd your-project-directory
nyg nyg-jam3
```

You will then be prompted with a number of questions, which will define the project. The appropriate files will then be copied to the current directory and it will install all your needed dependencies. Congratulations, you are now setup with the basis of a Jam3 project. 

## Setup Favicons

#### Default setup
After generate the scaffolding, you will have already setup the favicons for all the common devices, including those with iOS, Android, Windows Phone and for desktop version.

#### Customize
You can change the default configuration by modifying the file `/scripts/favicons/faviconDescription.json`. All the available option are described in (here)[http://realfavicongenerator.net/api/non_interactive_api](http://realfavicongenerator.net/api/non_interactive_api).
If you want to change the image, you can replace the image located in `/scripts/favicons/favicon_template.png` for your new favicon image. The recommended size for this master image is `500x500`.
After changing all the things you want, just run `npm run update-favicons` and you will get your new favicons ready.

**Note:** 
If you run the project on dev you won't see them because `budo` is creating an  own `index.html`. If you run `npm run release` you will see all this properly working.


## Preloader (React component)
Preloader Rect component is built on the top of [preloader module](https://www.npmjs.com/package/preloader). Please refer to it for more information.

#### Setup
Specify files or folders (to be read recursively) in `config-preloader.json` in the root of the project. 
On `npm start` the preloader script will be executed and `preloader-list.json` will be created in `raw-assets` folder with the list of files to be loaded, excluding any junk files.

**Note:** 
newly added assets won't affect the preloader list until next node script restart.

#### Props
- `assetsList` (Required) - an array of assets to be loaded. It automatically determines the loader to be used based on file extension (json, mp4, etc.)
- `minDisplayTime` - min time (in milliseconds) for the preloader to be shown
- `options` - an object that contains the following properties:

            - `xhrImages` - loads images via XHR and converts to a Blob instead of the image tag. Default: `false`
            - `loadFullAudio` - specifies is audio should be loaded in full instead of just to the point where they can play. Default: `false`
            - `loadFillVideo` - specifies is video should be loaded in full instead of just to the point where they can play. Default: `false`
            - `onComplete` - function to attach to the complete event
            - `onProgress` - function to attach to the progress event

#### API
Follows [preloader](https://www.npmjs.com/package/preloader) API for the corresponding methods:

- `add`
- `get`
- `load`
- `stopLoad`

## License

MIT, see [LICENSE.md](http://github.com/Jam3/generator-jam3/blob/master/LICENSE.md) for details.
