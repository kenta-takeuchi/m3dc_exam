@extends('layouts.layoutindex')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="container-component">

                    <div class="row">
                        <div class="description col-xs-12  col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">{{ Config::get('defaultcfg.defaultcfg.M3DC_SEMINAR_TITLE') }}</div>
                                <div class="panel-body">
                                    <div class="gaiyo">
                                        <dl>
                                            <dt>日程</dt>
                                            <dd>{{ Config::get('defaultcfg.defaultcfg.SEMI_INFO_DATE') }}</dd>
                                            <dt>演題</dt>
                                            <dd>{{ Config::get('defaultcfg.defaultcfg.SEMI_INFO_TITLE') }}</dd>
                                            <dt>演者</dt>
                                            <dd>{{ Config::get('defaultcfg.defaultcfg.SEMI_INFO_PROF') }}</dd>
                                        </dl>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="description col-xs-12  col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading"></div>
                                <div class="panel-body">

                                    <form id="nameForm" class="form-horizontal" role="form" method="post"
                                          action="{{ route('displayview') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">都道府県</label>
                                            <div class="col-md-4">
                                                <select name="todohuken" id="todohuken" class="form-control">
                                                    <option value="msg" selected="selected" class="msg">都道府県</option>
                                                    <option value="北海道">北海道</option>
                                                    <option value="青森県">青森県</option>
                                                    <option value="岩手県">岩手県</option>
                                                    <option value="宮城県">宮城県</option>
                                                    <option value="秋田県">秋田県</option>
                                                    <option value="山形県">山形県</option>
                                                    <option value="福島県">福島県</option>
                                                    <option value="茨城県">茨城県</option>
                                                    <option value="栃木県">栃木県</option>
                                                    <option value="群馬県">群馬県</option>
                                                    <option value="埼玉県">埼玉県</option>
                                                    <option value="千葉県">千葉県</option>
                                                    <option value="東京都">東京都</option>
                                                    <option value="神奈川県">神奈川県</option>
                                                    <option value="新潟県">新潟県</option>
                                                    <option value="富山県">富山県</option>
                                                    <option value="石川県">石川県</option>
                                                    <option value="福井県">福井県</option>
                                                    <option value="山梨県">山梨県</option>
                                                    <option value="長野県">長野県</option>
                                                    <option value="岐阜県">岐阜県</option>
                                                    <option value="静岡県">静岡県</option>
                                                    <option value="愛知県">愛知県</option>
                                                    <option value="三重県">三重県</option>
                                                    <option value="滋賀県">滋賀県</option>
                                                    <option value="京都府">京都府</option>
                                                    <option value="大阪府">大阪府</option>
                                                    <option value="兵庫県">兵庫県</option>
                                                    <option value="奈良県">奈良県</option>
                                                    <option value="和歌山県">和歌山県</option>
                                                    <option value="鳥取県">鳥取県</option>
                                                    <option value="島根県">島根県</option>
                                                    <option value="岡山県">岡山県</option>
                                                    <option value="広島県">広島県</option>
                                                    <option value="山口県">山口県</option>
                                                    <option value="徳島県">徳島県</option>
                                                    <option value="香川県">香川県</option>
                                                    <option value="愛媛県">愛媛県</option>
                                                    <option value="高知県">高知県</option>
                                                    <option value="福岡県">福岡県</option>
                                                    <option value="佐賀県">佐賀県</option>
                                                    <option value="長崎県">長崎県</option>
                                                    <option value="熊本県">熊本県</option>
                                                    <option value="大分県">大分県</option>
                                                    <option value="宮崎県">宮崎県</option>
                                                    <option value="鹿児島県">鹿児島県</option>
                                                    <option value="沖縄県">沖縄県</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">ご芳名</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="lname" id="lname"
                                                       placeholder="姓">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="fname"
                                                       id="fname" placeholder="名">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">参加人数</label>
                                            <div class="col-md-4">
                                                <input type="number" class="form-control" name="viewcnt"
                                                       id="viewcnt" min="1">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="btn-group btn-group-justified">
                                                <label class="col-xs-2 col-md-2"></label>
                                                <div class="col-xs-12 col-md-8">
                                                    <button type="submit" class="btn btn-primary btn-group-justified"
                                                            name="submitlang" value="jp">視聴する
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
