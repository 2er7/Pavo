<div class="row">
    <div class="col-sm-6 mb-2">
        {!! HTML::icon_link(route('social.redirect',['provider' => 'github']), 'fa fa-github', 'GitHub', array('class' => 'btn btn-block btn-social btn-github')) !!}
    </div>
    <div class="col-sm-6 mb-2">
        {!! HTML::icon_link(route('social.redirect',['provider' => 'bitbucket']), 'fa fa-bitbucket', 'Bitbucket', array('class' => 'btn btn-block btn-social btn-github')) !!}
    </div>
</div>
