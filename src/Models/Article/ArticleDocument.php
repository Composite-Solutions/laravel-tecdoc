<?php

namespace Composite\TecDoc\Models\Article;

use Composite\TecDoc\Models\Model;

class ArticleDocument extends Model
{
    /**
     * Document file name
     *
     * @var string
     */
    public ?string $docFileName; //"7.03703.90.0.JPG",

    /**
     * Document file type name
     *
     * @var string
     */
    public ?string $docFileTypeName; //"JPEG képfájl",

    /**
     * Document id
     *
     * @var string
     */
    public ?string $docId; //"845520147293266",

    /**
     * Document type id
     *
     * @var int
     */
    public ?int $docTypeId; //5,

    /**
     * Document type name
     *
     * @var string
     */
    public ?string $docTypeName; //"Kép"

    /**
     * Document url
     *
     * @var string
     */
    public ?string $docUrl; //"https://webservice.tecalliance.services/pegasus-3-0/documents/22491/845520153294071"

    /**
     * Document thumbnail url
     *
     * @var string
     */
    public ?string $thumbnailUrl; //"https://webservice.tecalliance.services/pegasus-3-0/documents/22491/845520153294071/1"

    /**
     * Get document file name
     *
     * @return  string
     */ 
    public function getDocFileName()
    {
        return $this->docFileName;
    }

    /**
     * Set document file name
     *
     * @param  string  $docFileName  Document file name
     *
     * @return  self
     */ 
    public function setDocFileName(string $docFileName = null)
    {
        $this->docFileName = $docFileName;

        return $this;
    }

    /**
     * Get document file type name
     *
     * @return  string
     */ 
    public function getDocFileTypeName()
    {
        return $this->docFileTypeName;
    }

    /**
     * Set document file type name
     *
     * @param  string  $docFileTypeName  Document file type name
     *
     * @return  self
     */ 
    public function setDocFileTypeName(string $docFileTypeName = null)
    {
        $this->docFileTypeName = $docFileTypeName;

        return $this;
    }

    /**
     * Get document id
     *
     * @return  string
     */ 
    public function getDocId()
    {
        return $this->docId;
    }

    /**
     * Set document id
     *
     * @param  string  $docId  Document id
     *
     * @return  self
     */ 
    public function setDocId(string $docId = null)
    {
        $this->docId = $docId;

        return $this;
    }

    /**
     * Get document type id
     *
     * @return  int
     */ 
    public function getDocTypeId()
    {
        return $this->docTypeId;
    }

    /**
     * Set document type id
     *
     * @param  int  $docTypeId  Document type id
     *
     * @return  self
     */ 
    public function setDocTypeId(int $docTypeId = null)
    {
        $this->docTypeId = $docTypeId;

        return $this;
    }

    /**
     * Get document type name
     *
     * @return  string
     */ 
    public function getDocTypeName()
    {
        return $this->docTypeName;
    }

    /**
     * Set document type name
     *
     * @param  string  $docTypeName  Document type name
     *
     * @return  self
     */ 
    public function setDocTypeName(string $docTypeName = null)
    {
        $this->docTypeName = $docTypeName;

        return $this;
    }

    /**
     * Get document url
     *
     * @return  string
     */ 
    public function getDocUrl()
    {
        return $this->docUrl;
    }

    /**
     * Set document url
     *
     * @param  string  $docUrl  Document url
     *
     * @return  self
     */ 
    public function setDocUrl(string $docUrl = null)
    {
        $this->docUrl = $docUrl;

        return $this;
    }

    /**
     * Get document thumbnail url
     *
     * @return  string
     */ 
    public function getThumbnailUrl()
    {
        return $this->thumbnailUrl;
    }

    /**
     * Set document thumbnail url
     *
     * @param  string  $thumbnailUrl  Document thumbnail url
     *
     * @return  self
     */ 
    public function setThumbnailUrl(string $thumbnailUrl = null)
    {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }
}
