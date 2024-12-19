<?php

namespace App\Mappers;

class RunMapper
{
    /**
     * Map data from one format to another.
     *
     * @param array $data
     * @return array
     */
    public function mapToNewFormat(array $data): array
    {
        return [
            'formatted_run' => $data['run'],
        ];
    }
}
