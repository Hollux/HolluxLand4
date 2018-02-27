<?php

namespace App\Controller;

use App\Service\Media\ResizeImage;
use App\Service\Media\UriToFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class MediaController
{
    public function __construct(ResizeImage $resizeImage, UriToFile $uriToFile)
    {
        $this->resizeImage = $resizeImage;
        $this->uriToFile = $uriToFile;
    }

    /**
     * @Route("/img/{type}/{width}/{height}/{url}",
     * name="resizeimage",
     * requirements={"url"=".+", "type" = "fill|crop", "width": "\d+", "height": "\d+" })
     */
    public function getImageAction(Request $request, $type, $width, $height, $url)
    {
        //recupération des services
        $uploadPath    = __DIR__.'/../../var/uploads';

        // Find file by uri
        $file = $this->uriToFile->find($url);

        //$file = new File($imageFile);
        // Set vars
        $etag = sha1_file($file->getPathname()).$width.$height;
        $thumbFilename = $uploadPath .'/thumbs/'.md5($type . $width. $height. $url).'.jpg';

        // Calcul de la nouvelle image resize
        $this->resizeImage->resize_image(
            $file->getPathname(),
            $width,
            $height,
            $thumbFilename,
            $type == 'crop'
        );

        // Create Response with standard http header for caching file
        $response = new BinaryFileResponse($thumbFilename);
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_INLINE, $url)
            ->setEtag($etag)
            ->setMaxAge(604800)
            ->setLastModified((new \DateTime())->setTimestamp($file->getMTime()))
            ->setExpires((new \DateTime())->modify('+604800 seconds'))

        ;
        $response->isNotModified($request);

        return $response;
    }

}