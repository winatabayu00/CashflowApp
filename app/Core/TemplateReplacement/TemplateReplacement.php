<?php

namespace App\Core\TemplateReplacement;

class TemplateReplacement
{
    protected const REGEX_PATTERN = '/\{(\w+)\}/';
    protected array $allKeyThatNeedToReplace = [];
    protected array $additionalMethodParams = [];

    /**
     * Description : use to build instance for static method
     * @return static
     */
    public static function build(): static
    {
        return new static();
    }


    /**
     * Description : use to change template placeholder into available data
     *
     * @param string $templatePattern
     * @param array $priorityReplacementData
     * @return string
     */
    public static function execute(string $templatePattern, array $priorityReplacementData = []): string
    {
        $instance = self::build();
        $refectionClass = new \ReflectionClass($instance);
        foreach ($instance->getAllKeyThatNeedToReplace($templatePattern) as $key => $placeholder) {
            $valueToReplace = null;

            if (empty($priorityReplacementData[$placeholder])){
                continue;
            }

            if (!array_key_exists($placeholder,$priorityReplacementData)){
                continue;
            }

            /**
             * first priority from param
             */
            if (isset($priorityReplacementData[$placeholder])) {
                $valueToReplace = $priorityReplacementData[$placeholder];
            }

            /**
             * method from overloading defined namespace
             * use _ to overload method from another class and override current class method
             */
            else if ($value = $instance->{"_" . self::getCamelCaseMethodNameFromSnakeCaseProperty($placeholder)}()) {
                $valueToReplace = $value;
            } /**
             * overload from another class to search method that does not exist on current class
             */
            else if ($value = $instance->{self::getCamelCaseMethodNameFromSnakeCaseProperty($placeholder)}()) {
                $valueToReplace = $value;
            } /**
             * overload property
             * use _ to overload property from another class and override current class property
             */
            else if ($value = $instance->{"_" . $placeholder}) {
                $valueToReplace = $value;

            } else if ($value = $instance->{$placeholder}) {
                $valueToReplace = $value;
            } /**
             * method or property from current class
             */
            else if ($refectionClass->hasMethod(self::getCamelCaseMethodNameFromSnakeCaseProperty($placeholder))) {
                $methodName = $refectionClass->getMethod(self::getCamelCaseMethodNameFromSnakeCaseProperty($placeholder))->name;
                $methodValue = $instance->{$methodName}();
                if (is_string($methodValue)) {
                    $valueToReplace = $methodValue;
                }
            } else if ($refectionClass->hasProperty($placeholder) && $refectionClass->getProperty($placeholder)->isInitialized($instance) && !is_null($refectionClass->getProperty($placeholder)->getValue($instance))) {
                $propertyValue = $refectionClass->getProperty($placeholder)->getValue($instance);
                if (is_string($propertyValue)) {
                    $valueToReplace = $propertyValue;
                }
            }


            if (!is_null($valueToReplace)) {
                $templatePattern = str_replace('{' . $placeholder . '}', $valueToReplace, $templatePattern);
            }
        }

        return $templatePattern;
    }

    /**
     * Description : transform to camel case from snake case string
     * ex: transfer full_name into getFullName
     * @param string $name
     * @return string
     */
    protected static function getCamelCaseMethodNameFromSnakeCaseProperty(string $name): string
    {
        $methodName = str_replace("_", "", ucwords($name));
        return "get$methodName";
    }

    /**
     * Description: get all data placeholder key from string pattern by regex
     * default regex {}
     * so when string pattern contain {name}, {target}
     * it will return [name, target]
     *
     * @param string $templatePattern
     * @return array
     */
    protected function getAllKeyThatNeedToReplace(string $templatePattern): array
    {
        preg_match_all(self::REGEX_PATTERN, $templatePattern, $this->allKeyThatNeedToReplace);
        return $this->allKeyThatNeedToReplace[1];
    }
}
