﻿CKEDITOR.plugins.setLang( 'simpleuploads', 'ru',
	{
		// Tooltip for the "add file" toolbar button
		addFile: 'Добавить файл',
		// Tooltip for the "add image" toolbar button
		addImage: 'Добавить изображение',

		// The server returned a URL after the upload that it's wrong
		badUrl: 'Failed to load the image with the provided URL',

		// Generic error for http status codes. Specific ones can be defined as 'httpStatus400', etc...
		errorPostFile: 'Error posting the file to %0\r\nResponse status:',

		// File size is over config.simpleuploads_maxFileSize OR the server returns HTTP status 413
		fileTooBig: 'Недопустимый размер файла, выберите файл меньшего размера.',

		// the 4 FailedTo messages can happen in Safari until they fix pasting files from Finder
		FailedToComputePreviewImageSize: 'Failed to compute the preview size. Try to drop it instead.',
		FailedToLoadPreviewImage: 'Failed to display the preview image. Try to drop it instead.',
		FailedToReadTheFile: 'Failed to read the file. Try to drop it instead.',
		FailedToReadTheImage: 'Failed to read the image. Try to drop it instead.',

		// The height of the image is over the allowed maximum
		imageTooTall: 'Изображение слишком высокое',

		// The width of the image is over the allowed maximum
		imageTooWide: 'Изображение слишком широкое',

		// The extension matches one of the blacklisted ones in config.simpleuploads_invalidExtensions
		invalidExtension: 'Недопустимый тип файла, выберите файл с допустимым разрешением.',

		// The extension isn't included in config.simpleuploads_acceptedExtensions
		nonAcceptedExtension: 'Недопустимый тип файла, выберите файл с допустимым разрешением:\r\n%0',

		// The file isn't an accepted type for images
		nonImageExtension: 'Пожалуйста, выберите изображение',

		// Shown after the data has been sent to the server and we're waiting for the response
		processing: 'Обработка...',

		// images with webkit-fake-url can't be read
		uselessSafari: 'Sorry, this version of Safari doesn\'t allow to paste images',

		// Error in the XHR upload. I'm not sure under which conditions this could happen, but it's a safety check
		xhrError: 'Error posting the file to %0'
	}
);
