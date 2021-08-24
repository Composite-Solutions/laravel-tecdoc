<?php

namespace Composite\TecDoc\DTOs\Article;

use Composite\TecDoc\Models\Article\ArticleDocument;

class ArticleDocumentDTO
{
    /**
     * Create article document model from array
     *
     * @param  array $articleDocumentArray
     * @return ArticleDocument
     */
    public function createArticleDocumentModel(array $articleDocumentArray) : ArticleDocument
    {
        $articleDocument = new ArticleDocument();
        $articleDocument->setDocFileName($articleDocumentArray['docFileName'] ?? null);
        $articleDocument->setDocFileTypeName($articleDocumentArray['docFileTypeName'] ?? null);
        $articleDocument->setDocId($articleDocumentArray['docId'] ?? null);
        $articleDocument->setDocTypeId($articleDocumentArray['docTypeId'] ?? null);
        $articleDocument->setDocTypeName($articleDocumentArray['docTypeName'] ?? null);
        return $articleDocument;
    }

    /**
     * Map article documents array to array of article document models
     *
     * @param  array $data
     * @return array
     */
    public function mapArticleDocumentCollection(array $data) : array
    {
        if (isset($data["data"]) && $data["data"]) {
            $articleDocuments = [];
            foreach ($data["data"]["array"][0]['articleDocuments']['array'] as $articleDocument) {
                array_push($articleDocuments, $this->createArticleDocumentModel($articleDocument));
            }
            return $articleDocuments;
        }
    }
}
