<?php
declare(strict_types = 1);

namespace Im20;

class ImFile
{
    public static $mimeTypes = array(
        'ez' => 'application/andrew-inset',
        'hqx' => 'application/mac-binhex40',
        'cpt' => 'application/mac-compactpro',
        'doc' => 'application/msword',
        'bin' => 'application/octet-stream',
        'dms' => 'application/octet-stream',
        'lha' => 'application/octet-stream',
        'lzh' => 'application/octet-stream',
        'exe' => 'application/octet-stream',
        'class' => 'application/octet-stream',
        'so' => 'application/octet-stream',
        'dll' => 'application/octet-stream',
        'oda' => 'application/oda',
        'pdf' => 'application/pdf',
        'ai' => 'application/postscript',
        'eps' => 'application/postscript',
        'ps' => 'application/postscript',
        'smi' => 'application/smil',
        'smil' => 'application/smil',
        'mif' => 'application/vnd.mif',
        'xls' => 'application/vnd.ms-excel',
        'ppt' => 'application/vnd.ms-powerpoint',
        'wbxml' => 'application/vnd.wap.wbxml',
        'wmlc' => 'application/vnd.wap.wmlc',
        'wmlsc' => 'application/vnd.wap.wmlscriptc',
        'bcpio' => 'application/x-bcpio',
        'vcd' => 'application/x-cdlink',
        'pgn' => 'application/x-chess-pgn',
        'cpio' => 'application/x-cpio',
        'csh' => 'application/x-csh',
        'dcr' => 'application/x-director',
        'dir' => 'application/x-director',
        'dxr' => 'application/x-director',
        'dvi' => 'application/x-dvi',
        'spl' => 'application/x-futuresplash',
        'gtar' => 'application/x-gtar',
        'hdf' => 'application/x-hdf',
        'js' => 'application/x-javascript',
        'skp' => 'application/x-koan',
        'skd' => 'application/x-koan',
        'skt' => 'application/x-koan',
        'skm' => 'application/x-koan',
        'latex' => 'application/x-latex',
        'nc' => 'application/x-netcdf',
        'cdf' => 'application/x-netcdf',
        'sh' => 'application/x-sh',
        'shar' => 'application/x-shar',
        'swf' => 'application/x-shockwave-flash',
        'sit' => 'application/x-stuffit',
        'sv4cpio' => 'application/x-sv4cpio',
        'sv4crc' => 'application/x-sv4crc',
        'tar' => 'application/x-tar',
        'tcl' => 'application/x-tcl',
        'tex' => 'application/x-tex',
        'texinfo' => 'application/x-texinfo',
        'texi' => 'application/x-texinfo',
        't' => 'application/x-troff',
        'tr' => 'application/x-troff',
        'roff' => 'application/x-troff',
        'man' => 'application/x-troff-man',
        'me' => 'application/x-troff-me',
        'ms' => 'application/x-troff-ms',
        'ustar' => 'application/x-ustar',
        'src' => 'application/x-wais-source',
        'xhtml' => 'application/xhtml+xml',
        'xht' => 'application/xhtml+xml',
        'zip' => 'application/zip',
        'au' => 'audio/basic',
        'snd' => 'audio/basic',
        'mid' => 'audio/midi',
        'midi' => 'audio/midi',
        'kar' => 'audio/midi',
        'mpga' => 'audio/mpeg',
        'mp2' => 'audio/mpeg',
        'mp3' => 'audio/mpeg',
        'aif' => 'audio/x-aiff',
        'aiff' => 'audio/x-aiff',
        'aifc' => 'audio/x-aiff',
        'm3u' => 'audio/x-mpegurl',
        'ram' => 'audio/x-pn-realaudio',
        'rm' => 'audio/x-pn-realaudio',
        'rpm' => 'audio/x-pn-realaudio-plugin',
        'ra' => 'audio/x-realaudio',
        'wav' => 'audio/x-wav',
        'pdb' => 'chemical/x-pdb',
        'xyz' => 'chemical/x-xyz',
        'bmp' => 'image/bmp',
        'gif' => 'image/gif',
        'ief' => 'image/ief',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'jpe' => 'image/jpeg',
        'png' => 'image/png',
        'tiff' => 'image/tiff',
        'tif' => 'image/tiff',
        'djvu' => 'image/vnd.djvu',
        'djv' => 'image/vnd.djvu',
        'wbmp' => 'image/vnd.wap.wbmp',
        'ras' => 'image/x-cmu-raster',
        'pnm' => 'image/x-portable-anymap',
        'pbm' => 'image/x-portable-bitmap',
        'pgm' => 'image/x-portable-graymap',
        'ppm' => 'image/x-portable-pixmap',
        'rgb' => 'image/x-rgb',
        'xbm' => 'image/x-xbitmap',
        'xpm' => 'image/x-xpixmap',
        'xwd' => 'image/x-xwindowdump',
        'igs' => 'model/iges',
        'iges' => 'model/iges',
        'msh' => 'model/mesh',
        'mesh' => 'model/mesh',
        'silo' => 'model/mesh',
        'wrl' => 'model/vrml',
        'vrml' => 'model/vrml',
        'css' => 'text/css',
        'html' => 'text/html',
        'htm' => 'text/html',
        'asc' => 'text/plain',
        'txt' => 'text/plain',
        'rtx' => 'text/richtext',
        'rtf' => 'text/rtf',
        'sgml' => 'text/sgml',
        'sgm' => 'text/sgml',
        'tsv' => 'text/tab-separated-values',
        'wml' => 'text/vnd.wap.wml',
        'wmls' => 'text/vnd.wap.wmlscript',
        'etx' => 'text/x-setext',
        'xsl' => 'text/xml',
        'xml' => 'text/xml',
        'mpeg' => 'video/mpeg',
        'mpg' => 'video/mpeg',
        'mpe' => 'video/mpeg',
        'qt' => 'video/quicktime',
        'mov' => 'video/quicktime',
        'mxu' => 'video/vnd.mpegurl',
        'avi' => 'video/x-msvideo',
        'movie' => 'video/x-sgi-movie',
        'ice' => 'x-conference/x-cooltalk',
        'mp4' => 'video/mp4',
        'flv' => 'video/flv',
    );

    /**
     * 获得扩展名
     * @param string $file 文件路径
     * @return string
     */
    public static function getFileExt($file)
    {
        $arr = explode('.', $file);
        return array_pop($arr);
    }

    /**
     * 保存Base64文件
     * @param string $content
     * @param string $fullFileName 包括路径的文件名
     * @return int 文件大小或false
     */
    public static function saveBase64File($content, $fullFileName)
    {
        if (!self::buildDir(dirname($fullFileName))) {
            return file_put_contents($fullFileName, base64_decode($content));
        }
    }

    /**
     * 保存文件
     * @param string $content
     * @param string $fullFileName 包括路径的文件名
     * @return int 文件大小或false
     */
    public static function saveFile($content, $fullFileName)
    {
        if (!self::buildDir(dirname($fullFileName))) {
            return file_put_contents($fullFileName, $content);
        }
    }


    /**
     * 获取原始post数据
     * @return string
     */
    public static function getRawPostData()
    {
        return empty($GLOBALS['HTTP_RAW_POST_DATA']) ? file_get_contents('php://input') : $GLOBALS['HTTP_RAW_POST_DATA'];
    }

    /**
     * 建立目录
     * @param string $filepath
     * @return boolean
     */
    public static function buildDir($filepath)
    {
        $pathArray = explode('/', $filepath);
        $nowPath = '';
        foreach ($pathArray as $key => $value) {
            if ('' === $value) {
                unset($pathArray[$key]);
            } else {
                if ($key === 0) {
                    $nowPath .= $value;
                } else {
                    $nowPath .= '/' . $value;
                }

                if (!mkdir($nowPath, 0777) && !is_dir($nowPath)) {
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * 用数字hash路径
     * @param int $num
     * @param int $max
     * @return string eg: 13/231
     */
    public static function getNumHash($num, $max = 1000)
    {
        return (int)($num / $max) . '/' . $num % $max;
    }

    /**
     * 用时间hash路径
     * @return string eg: 2012/11/01/20
     */
    public static function getTimeHash()
    {
        return date('Y/m/d/H');
    }

    /**
     * 用时间hash路径
     * @return string eg: 2012/11/01
     */
    public static function getDayHash()
    {
        return date('Y/m/d');
    }

    /**
     * 用字符串hash路径
     * @param string $str
     * @return string eg: d/3/A
     */
    public static function getStringHash($str = '')
    {
        if (!$str) {
            $str = uniqid('', true);
        }
        $temp = md5($str);
        return $temp[0] . '/' . $temp[12] . '/' . $temp[24];
    }

    /**
     * 输出文件
     * @param string $filepath 文件路径，可以是网址
     * @param boolean $return 返回或直接输出
     * @return string
     */
    public static function outputFileForDownload($filepath, $return = false)
    {
        $ext = self::getFileExt($filepath);
        $type = self::$mimeTypes[$ext];
        header("Content-type: {$type}");
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600 * 24 * 10) . ' GMT');

        $content = file_get_contents($filepath);
        if ($return) {
            return $content;
        }
        print $content;
    }

    /**
     * 删除BOM头
     * @param string $content
     * @return string
     */
    public static function clearBOM($content)
    {
        $charset[1] = $content[0];
        $charset[2] = $content[1];
        $charset[3] = $content[2];
        if (ord($charset[1]) === 239 && ord($charset[2]) === 187 && ord($charset[3]) === 191) {
            $content = substr($content, 3);
        }
        return $content;
    }
}
