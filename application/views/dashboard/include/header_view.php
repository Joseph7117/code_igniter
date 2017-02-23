<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Title</title>
        <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?=base_url()?>public/css/style.css" type="text/css" />
        
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default" style="margin-top: 30px">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapse" aria-expanded="false" aria-controls="navbar"></button>
                        <a class="navbar-brand">Application</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Welcome</a></li>
                        <li><a href="<?=  site_url('dashboard')?>">Home</a></li>
                        <li><a href="<?=  site_url('dashboard/logout')?>">Log Out</a> </li>
                    </ul>
                </div>
                </div>
            </nav>