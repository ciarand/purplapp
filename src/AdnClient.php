<?php namespace Purplapp;

class AdnClient
{
    /**
     * How long to sleep between requests. Decrease if dealing with fast-moving
     * streams
     *
     * @var int
     */
    public $streamingSleepFor = 20000;

    /**
     * The base API url. This can be changed in a subclass if accessing a
     * different endpoint
     *
     * @var string
     */
    protected $baseUrl = "https://api.app.net/";

    /**
     * The client ID
     *
     * @var string
     */
    private $clientId = "";

    /**
     * The client secret
     *
     * @var string
     */
    private $clientSecret;

    /**
     * The oauth endpoint. This can be changed in a subclass if accessing a
     * different endpoint
     *
     * @var string
     */
    protected $authUrl = "https://account.app.net/oauth/";

    /**
     * @var string
     */
    private $accessToken = null;

    /**
     * @var string
     */
    private $appAccessToken = null;

    /**
     * @var int
     */
    private $userId = null;

    /**
     * @var string
     */
    private $username = null;

    /**
     * Number of requires allowed within an allotted time period
     *
     * @var int
     */
    private $rateLimit = 0;

    /**
     * Number of requests remaining within this time period
     *
     * @var int
     */
    private $rateLimitRemaining = 0;

    /**
     * Number of seconds remaining in the current time period
     *
     * @var int
     */
    private $rateLimitReset;

    /**
     * Scope the user has
     *
     * @var string
     */
    private $userScope = null;

    /**
     * Scopes the token has
     *
     * @var array
     */
    private $scopes = array();

    /**
     * SSL cert
     *
     * @var string
     */
    private $sslCert = null;

    /**
     * The callback to be called when an event is received
     *
     * @var callable
     */
    private $streamCallback = null;

    /**
     * The stream buffer
     *
     * @var string
     */
    private $streamBuffer = "";

    /**
     * Curl handler for the current stream
     *
     * @var resource
     */
    private $currentStream = null;

    /**
     * Curl multi-handler for the current stream
     *
     * @var resource
     */
    private $multiStream = null;

    /**
     * Number of failed connection attempts
     *
     * @var int
     */
    private $connectFailCounter = 0;

    /**
     * The most recent stream URL
     *
     * @var string
     */
    private $streamUrl;

    /**
     * Last time we've received a packet from the API
     *
     * @var int
     */
    private $lastStreamActivity = null;

    /**
     * Stream headers received
     *
     * @var string
     */
    private $streamHeaders = null;

    /**
     * Response meta, max_id data
     *
     * @var int
     */
    private $maxId = null;

    /**
     * Response meta, min_id data
     *
     * @var int
     */
    private $minId = null;

    /**
     * Response meta, more data
     *
     * @var bool
     */
    private $moreData = false;

    /**
     * Response stream marker
     *
     * @var int
     */
    private $lastMarker = null;

    /**
     * Whether to strip the response envelope (i.e. return only the data
     * portion of the response if this is true)
     *
     * @var bool
     */
    private $stripResponseEnvelope = true;

    /**
     * Create a new AdnClient object with the provided clientId and secret.
     *
     * @param string $clientId
     * @param string $clientSecret
     */
    public function __construct($clientId, $clientSecret)
    {
        $this->clientId     = $clientId;
        $this->clientSecret = $clientSecret;

        $this->initializeSslCert();
    }

    /**
     * Returns the auth url for the user to visit and grant access
     *
     * Scope permissions can be any of the following:
     *
     *  - stream
     *  - email
     *  - write_post
     *  - follow
     *  - messages
     *  - export
     *
     * @param string $callback where to redirect after auth
     * @param array $scope an array of scopes
     */
    public function getAuthUrl($callback, $scope = null)
    {
        $data = array(
            "client_id" => $this->clientId,
            "response_type" => "code",
            "redirect_uri" => $callback,
        );

        return implode("", array(
            $this->authUrl,
            $this->accessToken ? "authorize" : "authenticate",
            $this->buildQueryString($data),
            $scope ? "&scope=" . implode("+", $scope) : "",
        ));
    }

    /**
     * Returns the user's token
     *
     * @return string|null
     */
    public function getAccessToken($callback)
    {
        if (!$this->accessToken) {
            // TODO
            // a class really shouldn't be accessing _GET params
        }

        return $this->accessToken;
    }

    /**
     * Checks if the cert exists and, if it does sets it to the sslCert var
     */
    private function initializeSslCert()
    {
        if (file_exists($c = __DIR__ . "/DigiCertHighAssuranceEVRootCA.pem")) {
            $this->sslCert = $c;
        }
    }
}
