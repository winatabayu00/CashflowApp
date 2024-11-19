<?php

namespace App\Concerns\Base\Resolver;

use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
use ReflectionException;

trait GetResolver
{
    use ModelResolver;

    /**
     * @param string $configName
     * @param string $type
     * @param int|string $identifier
     *
     * @return mixed
     *
     * @throws ReflectionException
     */
    protected function resolve(string $configName, string $type, int|string $identifier): mixed
    {
        $modelString = config('resolver.' . $configName . '.' . $type . '.model');

        abort_unless($modelString, 404, "model for {$type} not found, did you forget to register it in config/resolver/{$configName}.php");

        $model = $this->resolveModel($modelString, $identifier);

        if (!$model instanceof Model) {
            throw new InvalidArgumentException('Class ' . $modelString . 'must be instance of ' . Model::class);
        }

        return $model;
    }
}

