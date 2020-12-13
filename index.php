<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google Drive Direct Download Link Generator</title>
    <meta name="description" content="Easily Generate GDRIVE Link for Drirect Download." />
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link href='https://fonts.googleapis.com/css?family=Asap Condensed' rel='stylesheet'>
    <link rel="icon" href="img/g-drive.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container example5">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar5">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img style="	width: 150px;"
                            src="https://www.prowebtips.com/wp-content/uploads/2020/09/cropped-prowebtips-logo-gp-1.png"
                            alt="Dispute Bills">
                    </a>
                </div>
                <div id="navbar5" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/blog/">Blogs</a></li>
                        <li><a href="/about/">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>

    </div>



    <div class="container">
        <div style="padding-top:20px;">
            <center><img src="img/g-drive.png" style="height:150px;" alt="Google Drive Logo">
                <h2 style=" font-family: 'Asap Condensed';background:white;max-width:320px;border-radius:30px;"><span
                        style="color:#10975B">G</span><span style="color:#E3B73A;">DRIVE</span> <span
                        style="color:#2E70DD;">DOWNLOADER</span><span class="badge badge-danger"></span></h2>
            </center>
        </div>
        <div class="panel panel-default panel-primary" id="mainpanel">
            <div class="panel-heading">
                <h1 class="panel-title">Google Drive Direct Download Link Generator</h1>
            </div>
            <div class="panel-body">
                <form>
                    <div class="form-group">
                        <label for="sharelink">Share link</label>
                        <input type="text" class="form-control" id="sharelink"
                            placeholder="https://drive.google.com/file/d/XX-X__XXXXX-XXXXXXXXXXXXXXXX/view?usp=sharing"
                            autofocus="true">
                    </div>
                    <div class="form-group">
                        <label for="downloadlink">Download link</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="downloadlink" readonly>
                            <span class="input-group-btn">
                                <button id="copylinkbtn" class="btn btn-success" type="button"
                                    data-clipboard-target="#downloadlink" disabled>Copy link</button>
                            </span>
                        </div>
                    </div>
                </form>

                <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    How To Use?
                </button>
                <div class="collapse" id="collapseExample">
                    <br />
                    <div class="well text-center">
                        <ul align="left">
                            <p><strong>"also working with any account's file link"</strong></p>
                            <li>Open Your Google Drive</li>
                            <li>Right Click On Your File</li>
                            <li>Click On Share</li>
                            <li>Click On Get Shareable Link</li>
                            <li>Click On Copy Link/Copy Link</li>
                            <li>Paste Here</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="panel-footer text-right">&copy; 2020• <a href="/">PROWEBTIPS</a></div>
        </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js'>
    </script>
    <script src="js/index.js"></script>
</body>

</html>
