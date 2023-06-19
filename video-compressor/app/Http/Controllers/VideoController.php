<?php

namespace App\Http\Controllers;

use FFMpeg\FFMpeg;

use Illuminate\Http\Request;
use FFMpeg\Format\Video\X264;


class VideoController extends Controller
{
    public function compress(Request $request)

    {

        $video = $request->file('video');

        $ffmpeg = FFMpeg::create();
        $video = $ffmpeg->open($video->getRealPath());

        $format = new X264('aac', 'libx264');
        $format->setAudioCodec('aac');
        $format->setVideoCodec('libx264');
        $format->setKiloBitrate(28);
        $format->setAudioKiloBitrate(28);
        $format->setAdditionalParameters(['-preset', 'slow']);
        $format->setAdditionalParameters(['-tune', 'film']);

        $video->save($format, public_path('compressed.mp4'));

        return response()->download(public_path('compressed.mp4'));
    }
}
