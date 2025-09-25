<?php

namespace Enums;

enum HttpCode: string
{
    case Continue = '100';
    case SwitchingProtocol = '101';
    case Processing = '102';
    case OK = '200';
    case Created = '201';
    case Accepted = '202';
    case NonAuthoritative = '203';
    case NoContent = '204';
    case ResetContent = '205';
    case PartialContent = '206';
    case MultiStatus = '207';
    case AlreadyReported = '208';
    case BadRequest = '400';
    case Unauthorized = '401';
    case PaymentRequired = '402';
    case Forbidden = '403';
    case NotFound = '404';
    case MethodNotAllowed = '405';
    case NotAcceptable = '406';

    case ProxyAuthenticationRequired = '407';
    case RequestTimeOut = '408';
    case Conflict = '409';
    case RequestEntityTooLarge = '413';

    case InternalServerError = '500';
    case NotImplemented = '501';
    case BadGateway = '502';
    case ServiceUnavailable = '503';
    case GatewayTimeout = '504';
    case HTTPVersionNotSupported = '505';
    case VariantAlsoNegotiated = '506';
    case VariantNotAcceptable = '507';
    case LoopDetected = '508';
    case Unassigned = '509';
}