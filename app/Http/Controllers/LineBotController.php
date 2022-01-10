<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LINE\LINEBot\Constant\HTTPHeader;

class LineBotController extends Controller
{
    public function test()
    {
        echo 'test!';
    }

    public function index(Request $request)
    {
        $ChannelAccessToken ='2zIKZXAV935hMD0oSkH/6o+gWetLWyrAks07ZZSoOp0FKmBt//yY1+GNRWRk7K27sUI/tCN/aMJ2o83h+ChtsorFyJ6Kj2tvgDRxm9V94tUueNhiQFG06MCEMVC6+dNZBphFGEW65QRxzZig/YHV6wdB04t89/1O/w1cDnyilFU=';
        $ChannelUserId = 'Udf40a63b30347c32537656bb8200cbbb';
        $ChannelSecret = 'e45ce853271ee12f1ea1e4f866a48e07';

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
