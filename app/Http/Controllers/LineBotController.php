<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LINE\LINEBot\Constant\HTTPHeader;

class LineBotController extends Controller
{
    public function index(Request $request)
    {
        $ChannelAccessToken = '';
        $ChannelSecret = '';

        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($ChannelAccessToken);
        $bot = new \LINE\LINEBot($httpClient,['channelSecret' => $ChannelSecret]);

        $signature = $request->header(HTTPHeader::LINE_SIGNATURE);
        $body = $request->getContent();
        $events = $bot->parseEventRequest($body, $signature);

        foreach ($events as $event) {
            if ($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage) {
                $reply_token = $event->getReplyToken();
                $text = $event->getText();
                $bot->replyText($reply_token, $text);
            }
        }
    }
}

