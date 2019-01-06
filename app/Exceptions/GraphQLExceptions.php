<?php
namespace App\Exceptions;

use GraphQL\Error\Error;
use Rebing\GraphQL\Error\ValidationError;
use App\Exceptions\MessageError;
use Bugsnag\BugsnagLaravel\Facades\Bugsnag;

class GraphQLExceptions
{
    public static function formatError(Error $e)
    {
        $error = [
            'message' => $e->getMessage()
        ];

        $locations = $e->getLocations();
        if (!empty($locations)) {
            $error['locations'] = array_map(function ($loc) {
                return $loc->toArray();
            }, $locations);
        }

        $previous = $e->getPrevious();
        if ($previous) {
            if ($previous instanceof ValidationError) {
                $error['validation'] = $previous->getValidatorMessages();
            } elseif (!($previous instanceof MessageError)) {
                Bugsnag::notifyException($e);
            }
        }

        return $error;
    }
}
