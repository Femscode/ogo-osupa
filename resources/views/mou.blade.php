<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Permit Certificate</title>
    <style>
        body {
            
            background-color: #ecf3eec4;
        }
        .container {
            border: 1px solid rgb(52, 112, 28);
            width: 970px;
            height: 580px;
            border: 10px solid #00A859;
            background-color: #ecf3eec4;
            padding: 10px;
            padding-top: 0px;
        }
        
        .header {
            display: flex;
            width: 100%;
            justify-content: space-between;
            margin-top: 0;
        }
        
        .fnt0 {
            
        }
        
        .fnt1 {
            font-weight: 3;
            font-size: 18px;
            font-family: 'Arial Black'
        }
        
        .title {
            margin-top: 20px;
            margin-bottom: 0;
        }
        
        img {
            margin-bottom: 6px;
        }
        
        .title h2,
        h5,
        h4 {
            line-height: 0px;
            margin: 0px;
            padding: 0;
        }
        
        h4 {
            margin-bottom: 4px;
        }
        
        .stin {
            margin: auto;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            font-size: 14px;
            text-align: right;
            margin-top:0px;top:0px;right:0px;margin-right:0px;position:absolute;
        }
        
        .cert h1 {
            font-family: 'Freestyle Script';
            font-size: 80px;
            color: #00A859;
            line-height: 0px;
            margin-top: -4px;
            font-weight: normal;
        }
        
        .cert h1 span {
            text-decoration-line: underline;
            text-decoration-thickness: 2px;
            text-decoration-style: double;
        }
        
        .name {
            border-bottom: 2px solid black;
            padding: 0;
            margin: 10px 30px;
        }
        
        .name1 {
            border-bottom: 2px solid black;
            padding: 0;
            margin: 10px 30px;
        }
        
        .name h3 {
            margin: 0px
        }
        
        .name1 h3 {
            margin: 0px
        }
        
        .bureau {
            width: max-content;
            font-weight: 2;
            font-size: 16px;
            font-family: 'Montserrat Extra Bold';
            margin: auto;
            color: #0eb830;
        }
        
        .bureau h1 {
            text-align: left;
            font-size:20px;
        }
        
        .bureau h4 {
            text-align: left;
            color: black
        }
        
        .interim h2 {
            color: #D02930;
            font-weight: bolder;
            font-size: 30px;
            font-family: 'WeddingText BT';
        }
        
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        #customers tr:hover {
            background-color: #ddd;
        }
        
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
        
        .content p,
        .content h1 {
            /* line-height: 0.5; */
        }
        
        .linebottom p:first-child {
            border-bottom: 1px solid black;
            margin-left: 30px;
            margin-right: 30px;
        }
        
        .footer {
            display: flex;
            justify-content: space-between;
            margin-left: 20px;
            margin-right: 20px
        }
    </style>
</head>

<body size="A4" orientation="landscape">
    <center>

        <div class="container">
           
            <div style='text-align:center'>
            <div class="interim">
                <h2>Memorandum of Understanding</h2>
            </div>
            <div class="content">
                <p>Here is a documentation that agrees that a user with the email  </p>
                <h1>{{$email}}</h1>
                <p>have an investment with RubyCapital Limited with a total sum of {{$amount}} on the {{$created_at}}</p>
               

            </div>
            <div class="footer">
                <h3>Created on:{{$created_at}}</h3>
              
            </div>
    </div>

        </div>

    </center>

</body>

</html>