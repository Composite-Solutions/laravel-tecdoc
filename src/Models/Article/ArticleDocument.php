<?php

namespace Composite\TecDoc\Models\Article;

class ArticleDocument
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
}
