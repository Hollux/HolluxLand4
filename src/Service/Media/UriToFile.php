<?php
namespace App\Service\Media;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Soit cherche media avec la base de donné(retiré car pas d'entity media)
//Ou vérifie si c'est dans uploadPath
//Ou si c'est dans webPath
//Sinon Error
//Retourne le File.
class UriToFile
{
    /**
     * @var \AppBundle\Service\Media\Media
     */
    protected $mediaService;

    /**
     * @var string
     */
    protected $uploadPath;

    /**
     * @var string
     */
    protected $webPath;

    /**
     * @return Media
     */
    public function getMediaService(): Media
    {

        return $this->mediaService;
    }

    /**
     * @return string
     */
    public function getUploadPath()
    {
        $uploadPath    = __DIR__.'/../../../var/uploads/';

        return $uploadPath;
    }

    /**
     * @return string
     */
    public function getWebPath()
    {
        $webPath = __DIR__.'/../../../public/';

        return $webPath;
    }

    /**
     * UriToFile constructor.
     * @param Media $mediaService
     * @param string $uploadPath
     * @param string $webPath
     */
    public function __construct(/*, Media $mediaService*/)
    {

        //$this->mediaService = $mediaService;
    }

    public function fieldImg()
    {

        return $arrayFieldImg = array_diff(scandir('img'), ['.', '..']);
    }

    /**
     * find by uri.
     *
     * @param Media $mediaService
     * @param string $uri
     * @param bool $useDns |default = true
     *
     * @return File|NotFoundHttpException
     */
    public function find($uri)
    {
        //TODO : code très nul ! gestion des sous fichier de img etc.

        $media = null;//$this->mediaService->getMedia($uri, $useDns);
        $file = null;

        //TODO cherche media avec l'objet media
        if (null !== null/*$media  && $media->getFile() instanceof File*/) {
            $file = $media->getFile();
        } else if (is_file($this->getUploadPath() . $uri)) {
            $file = new File($this->getUploadPath() . $uri);
        }

        if (null == $file) {
            foreach ($this->fieldImg() as $fieldImg)
            {
                if (is_file($this->getWebPath() . 'img/' .$fieldImg.'/'. $uri)) {
                    $file = new File($this->getWebPath() . 'img/' .$fieldImg.'/'. $uri);
                }
            }

        }

        if (null == $file) {
            throw new NotFoundHttpException('file_not_found');
        }


        return $file;
    }
}