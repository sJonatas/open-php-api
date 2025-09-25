<?php

namespace Enums;

enum MediaTypeContent: string
{
    case ApplicationJson = 'application/json';
    case FormUrlEncoded = 'application/x-www-form-urlencoded';
    case ApplicationOgg = 'application/ogg';
    case ApplicationOctetStream = 'application/octet-stream';
    case ApplicationPdf = 'application/pdf';
    case ApplicationXhtml = 'application/xhtml+xml';
    case ApplicationSvg = 'image/svg+xml';
    case ApplicationXml = 'application/xml';
    case ApplicationZip = 'application/zip';

    case AudioMp3 = 'audio/mpeg';
    case AudioWav = 'audio/x-wav';

    case ImageAll = 'image/*';
    case ImageBmp = 'image/bmp';
    case ImageGif = 'image/gif';
    case ImageJpeg = 'image/jpeg';
    case ImagePng = 'image/png';
    case ImageSvg = 'image/svg';
    case ImageTiff = 'image/tiff';

    case MultipartMixed = 'multipart/mixed';
    case MultipartFormData = 'multipart/form-data';

    case TextAll = 'text/*';
    case TextHtml = 'text/html';
    case TextPlain = 'text/plain';
    case TextCsv = 'text/csv';
    case TextCss = 'text/css';
    case TextXml = 'text/xml';

    case VideoAll = 'video/*';
    case VideoMp4 = 'video/mp4';
    case VideoQuicktime = 'video/quicktime';
    case VideoWebm = 'video/webm';
}
