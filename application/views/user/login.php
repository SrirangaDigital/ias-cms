<div class="container">
    <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-10">
            <div class="spp-general">
                <p class="title">login</p>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-1">&nbsp;</div>
    </div>
    <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-5">
            <form id="login" method="post" action="<?=BASE_URL . 'user/verifyLogin'?>">
                <div class="form-group text-right">
                    <p class="help-block red"><?=$data['errMsg']?></p>
                </div>
                <div class="form-group">
                    <label for="lemail">Email address*</label>
                    <input type="email" class="form-control" id="lemail" name="lemail" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="lpassword">Password*</label>
                    <input type="password" class="form-control" id="lpassword" name="lpassword" placeholder="Password" required>
                </div>
                <div class="form-group" id="pr_email_show">
                    <label class="red" for="pr_email">Enter your email address</label>
                    <input type="email" class="form-control" id="pr_email" name="pr_email" value="" placeholder="Enter your email address">
                </div>
                <button type="submit" class="btn btn-default" value="submit" name="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-4">&nbsp;</div>
    </div>
</div>
