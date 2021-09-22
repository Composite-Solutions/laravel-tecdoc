<?php

namespace Composite\TecDoc\DTOs\ModelSeries;

use Composite\TecDoc\Models\ModelSeries\ModelSeries;

class ModelSeriesDTO
{
    /**
     * Create ModelSeries model from array
     *
     * @param  array $modelSeriesArray
     * @return ModelSeries
     */
    public function createModelSeriesModel(array $modelSeriesArray): ModelSeries
    {
        $modelSeries = new ModelSeries();
        $modelSeries->setModelId($modelSeriesArray['modelId'] ?? null);
        $modelSeries->setModelName($modelSeriesArray['modelname'] ?? null);
        $modelSeries->setYearOfConstrFrom($modelSeriesArray['yearOfConstrFrom'] ?? null);
        $modelSeries->setYearOfConstrTo($modelSeriesArray['yearOfConstrTo'] ?? null);
        return $modelSeries;
    }

    /**
     * Map Assembly Groups to array
     *
     * @param  array $data
     * @return array
     */
    public function mapModelSeriesCollection(array $data)
    {
        if (isset($data["data"]) && $data["data"]) {
            $modelSeriesArray = [];
            if (isset($data["data"]["array"]) && $data["data"]["array"]) {
                foreach ($data["data"]["array"] as $modelSeries) {
                    array_push($modelSeriesArray, $this->createModelSeriesModel($modelSeries));
                }
            }
            return $modelSeriesArray;
        }
    }
}
