

<section class="section <?= $slice->getPrimary()->getText('background');?> clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="title"><?= $slice->getPrimary()->getText('title');?></h1>
                            <p><?= $slice->getPrimary()->getText('text');?></p>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <p><a href="<?= $slice->getPrimary()->getLink('target')->getUrl();?>" class="btn btn-lg btn-gray-transparent btn-animated"><?=$slice->getPrimary()->getText('button_text');?><i class="fa fa-arrow-right pl-20"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>