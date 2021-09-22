<?php

namespace Composite\TecDoc\DTOs\AssemblyGroup;

use Composite\TecDoc\Models\AssemblyGroup\AssemblyGroup;

class AssemblyGroupDTO
{
    /**
     * Create AssemblyGroup model model from array
     *
     * @param  array $assemblyGroupArray
     * @return AssemblyGroup
     */
    public function createAssemblyGroupModel(array $assemblyGroupArray): AssemblyGroup
    {
        $eanNumber = new AssemblyGroup();
        $eanNumber->setAssemblyGroupName($assemblyGroupArray['assemblyGroupName'] ?? null);
        $eanNumber->setAssemblyGroupNodeId($assemblyGroupArray['assemblyGroupNodeId'] ?? null);
        $eanNumber->setHasChilds($assemblyGroupArray['hasChilds'] ?? null);
        $eanNumber->setParentNodeId($assemblyGroupArray['parentNodeId'] ?? null);
        return $eanNumber;
    }

    /**
     * Map Assembly Groups to array
     *
     * @param  array $data
     * @return array
     */
    public function mapAssemblyGroupCollection(array $data)
    {
        if (isset($data["data"]) && $data["data"]) {
            $assemblyGroups = [];
            if (isset($data["data"]["array"]) && $data["data"]["array"]) {
                foreach ($data["data"]["array"] as $assemblyGroup) {
                    array_push($assemblyGroups, $this->createAssemblyGroupModel($assemblyGroup));
                }
            }
            return $assemblyGroups;
        }
    }
}
