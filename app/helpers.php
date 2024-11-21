<?php

use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;


/**
 * @param Carbon|string $date
 * @return Carbon
 * @throws ValidationException
 */
function createDate(Carbon|string $date): Carbon
{
    if (is_string($date)) {
        try {
            $date = Carbon::createFromFormat('Y-m-d', $date);
        } catch (Throwable $e) {
            throw ValidationException::withMessages(['date' => __('Date format should like date_time.')]);
        }
    }
    return Carbon::create(
        year: $date->year,
        month: $date->month,
        day: $date->day,
        hour: $date->hour >= 0 && $date->hour <= 11 ? 0 : 12);
}

if (!function_exists('setDefaultRequest')) {
    /**
     * Set Default Value for Request Input.
     *
     * @param string|array $name
     * @param null $value
     * @param bool $force
     *
     * @return void
     */
    function setDefaultRequest(string|array $name, mixed $value = null, bool $force = true): void
    {
        try {
            $request = app('request');

            if (is_array($name)) {
                $data = $name;
            } else {
                $data = [$name => $value];
            }

            if ($force) {
                $request->merge($data);
            } else {
                $request->mergeIfMissing($data);
            }
            $request->session()->flashInput($data);
        } catch (Exception $e) {
            // throw $e;
        }
    }
}

if (!function_exists('sanitizePhone')) {
    /**
     * @param string $phone
     * @param string $dial
     *
     * @return string|null
     */
    function sanitizePhone(string $phone, string $dial = '+62'): string|null
    {
        $phone = str($phone)
            ->trim()
            ->replaceMatches('/[^+0-9]/', '')
            ->replaceMatches('/^\++/', '+')
            ->replaceMatches('/^(0|6262|\+6262|62|\+62)(\d+)/', "{$dial}\$2")
            ->replaceMatches('/^(?!\+)(\d+)/', "{$dial}\$1")
            ->toString();
        return $phone == $dial ? null : $phone;
    }
}
