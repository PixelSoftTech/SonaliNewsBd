 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
 <html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="pdf/html2canvas.js"></script>
<script src="pdf/jspdf.debug.js"></script>


    <style> 
        table { 
            font-family: arial, sans-serif; 
            border-collapse: collapse;
			color:#000;
			font-size:16px; 
            width: 100%; 
        } 
 
        td, th { 
            /*border: 1px solid #dddddd; */
            text-align: left; 
            padding: 8px; 
        } 
 
        tr:nth-child(even) { 
            /*background-color: #dddddd; */
        } 
    </style>
</head>

<body>
 
             
       <table>
            <tbody> 
                <tr> 
                    <th> <?php echo "আগামী একাদশ জাতীয় সংসদ নির্বাচনে নারায়ণগঞ্জ-৫ আসনে প্রার্থীদের মধ্য থেকে যোগ্য ব্যক্তিকে ভোট দেওয়ার জন্য কলাগাছিয়া ইউনিয়নবাসীর প্রতি আহবান রেখেছেন নারায়ণগঞ্জ-৫ আসনের সংসদ সদস্য সেলিম ওসমান।"; ?> </th> 
                    <th><img src="../BSK Blog/doc/10972-featured-75x65.jpg"></th> 
                    <th>Country</th> 
                </tr> 
                <tr> 
                    <td>HCL</td> 
                    <td>Maria Anders</td> 
                    <td>USA</td> 
                </tr> 
                <tr> 
                    <td>Conduent</td> 
                    <td>Francisco Chang</td> 
                    <td>UK</td> 
                </tr> 
                <tr> 
                    <td>Wipro</td> 
                    <td>Roland Mendel</td> 
                    <td>Austria</td> 
                </tr> 
                <tr> 
                    <td>NIIT Technologies LTD</td> 
                    <td>Helen Bennett</td> 
                    <td>INDIA</td> 
                </tr> 
                <tr> 
                    <td>Laughing Bacchus Winecellars</td> 
                    <td>Yoshi Tannamuri</td> 
                    <td>Canada</td> 
                </tr> 
                <tr> 
                    <td>Magazzini Alimentari Riuniti</td> 
                    <td>Giovanni Rovelli</td> 
                    <td>বিজয়</td> 
                </tr> 
            </tbody> 
        </table>
<p  font-family: arial, sans-serif;>আগামী একাদশ জাতীয় সংসদ নির্বাচনে নারায়ণগঞ্জ-৫ আসনে প্রার্থীদের মধ্য থেকে যোগ্য ব্যক্তিকে ভোট দেওয়ার জন্য কলাগাছিয়া ইউনিয়নবাসীর প্রতি আহবান রেখেছেন নারায়ণগঞ্জ-৫ আসনের সংসদ সদস্য সেলিম ওসমান।</p>
</body>
     <script>
         let doc = new jsPDF('p', 'pt', 'a4'); 
         doc.addHTML(document.body, function () {
             doc.save('html.pdf');
         });

    </script>
</html>