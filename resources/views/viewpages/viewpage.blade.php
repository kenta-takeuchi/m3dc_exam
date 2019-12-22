@extends('layouts.layoutindex')

@section('content')

    <div class="container">
        <div class="container-component">

            <div class="pageWrap">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h4>{{ Config::get('defaultcfg.defaultcfg.M3DC_SEMINAR_TITLE') }}</h4>
                    </div>
                    <div class="panel-body">
                        <pre class="list-unstyled"><li>{{ Config::get('defaultcfg.defaultcfg.VIEW_INFO_DATE') }}</li><li>{{ Config::get('defaultcfg.defaultcfg.VIEW_INFO_TITLE') }}</li><li>{{ Config::get('defaultcfg.defaultcfg.VIEW_INFO_PROF') }}</li></pre>
                        <div class="text-center">
                            <iframe id="m3dc_logo" src="{{ asset('/img/m3dc_logo.png') }}"></iframe>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <p class="glyphicon glyphicon-warning-sign text-danger">　PCでご視聴の場合はVPNを切断しご覧ください</p>
                    </div>
                </div>

                <div class="col-sm-12 contactBox">
                    <a target="_blank" href="{{ Config::get('defaultcfg.defaultcfg.INQUIRY_URL') }}">接続に関する技術的な質問等ございましたら、こちらからお問い合わせ下さい。</a>
                </div>
            </div>

        </div>
    </div>

@endsection
