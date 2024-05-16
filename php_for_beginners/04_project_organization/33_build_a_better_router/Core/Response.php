<?php

namespace Core;

class Response
{
    const NOT_FOUND = 404;
    const NOT_AUTH = 401;
    const BAD_REQUEST = 400;
    const OK = 200;
    const CREATED = 201;
    const NO_CONTENT = 204;
    const FORBIDDEN = 403;
    const UNAUTHORIZED = 401;
    const CONFLICT = 409;
    const INTERNAL_ERROR = 500;
    const SERVICE_UNAVAILABLE = 503;
    const BAD_GATEWAY = 502;
    const GATEWAY_TIMEOUT = 504;
    const NOT_IMPLEMENTED = 501;
    const PRECONDITION_FAILED = 412;
    const REQUEST_TIMEOUT = 408;
    const TOO_MANY_REQUESTS = 429;
    const UNPROCESSABLE_ENTITY = 422;
    const LOCKED = 423;
}
