<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Keluarga</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <style>
    *,
    html {
        margin: 0;
        padding: 0;
        font-family: 'Poppins';
        color: black;

    }

    body {
        background-color: #2A3750;
    }

    /* HEADER */
    header {
        width: 100%;
        height: 7vh;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }



    ul {
        display: flex;
        list-style: none;
        font-size: 1.1vw;
        font-weight: 500;
    }

    li {
        margin-right: 50px;
    }

    ul li {
        position: relative;

    }

    ul li::after {
        bottom: 0px;
        position: absolute;
        content: '';
        width: 0;
        height: 2px;
        background-color: rgb(231, 181, 34);
        transition: .5s all ease-in-out;
        -webkit-transition: .5s all ease-in-out;
        -moz-transition: .5s all ease-in-out;
        -ms-transition: .5s all ease-in-out;
        -o-transition: .5s all ease-in-out;
        bottom: 0;
        right: 0;
        top: 24px;
    }

    ul li:hover::after {
        right: auto;
        left: 0;
        width: 100%
    }

    ul li:hover {
        transition: .2s;
        color: rgb(231, 181, 34);
    }

    ul li a:hover {
        color: rgb(231, 181, 34);
        transition: .5s;
    }

    a {
        cursor: pointer;
        text-decoration: none;
        /* color: #9db2bf; */
        color: #e9edf1;
    }



    i:hover {
        color: rgb(231, 181, 34);
        transition: all .3s;
    }

    iconify-icon {
        font-size: 2vmax;
        margin-left: 3vw;
        margin-top: 5px;
        color: #e9edf1;
    }


    #Logo:hover {
        color: rgb(231, 181, 34);
        transition: .5s;
    }

    /* table */
    section {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    table {
        width: 70%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    td {
        border: 1px solid #363636;
        font-family: 'Montserrat';
        text-align: center;
        padding: 5px;
        box-sizing: border-box;
        /* border-top-left-radius: 5px; */
    }

    tr:nth-child(even) {
        font-family: 'Monserrat';
        background-color: #ffff;
        /* background-color: #eaeaea; */
    }

    tr:nth-child(odd) {
        font-family: 'Monserrat';
        /* background-color: #ffff; */
        background-color: #eaeaeaea;
    }
    </style>
</head>

<body>
    <header>
        <a href="#">
            <iconify-icon icon="bxs:data" id="Logo"></iconify-icon>
        </a>
        <ul>
            <li>
                <a href="index.php">
                    Tampilan Awal
                </a>
            </li>
            <li>
                <a href="inputuser.php">
                    Tampilan Input
                </a>
            </li>
        </ul>
    </header>
    <section>

        <table cellspacing="0">
            <div class="clrtable">

                <tr style="text-align:center;font-weight:900;background-color:#86a6ff;">
                    <td>No</td>
                    <td>Nama</td>
                    <td>TTL </td>
                    <td>Jenis Kelamin</td>
                    <td>Alamat</td>
                    <td>Foto</td>
                    <td>Pekerjaan</td>
                    <td colspan="2">Opsi</td>
                </tr>
            </div>
            <?php
        include 'connect.php';
        $no=1;
        $select=mysqli_query($conn,"SELECT * FROM user");
        if(mysqli_num_rows($select)>0){
            while ($hasil=mysqli_fetch_array($select)){
        
        ?>
            <tr style="text-align:center;">
                <td><?php echo $no++?></td>
                <td><?php echo $hasil['Nama']?></td>
                <td><?php echo $hasil['Ttl']?></td>
                <td><?php echo $hasil['Jekel']?></td>
                <td><?php echo $hasil['Alamat']?></td>
                <td>
                    <img src="inputimg/<?php echo $hasil['Foto']; ?>" style="width:160px; height:200px;">
                </td>
                <td><?php echo $hasil['Pekerjaan']?></td>
                <td>
                    <a href="edit.php?Nama=<?php echo $hasil ['Nama']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
                <td>

                    <a href="delete.php?Nama=<?php echo $hasil ['Nama']?>"><i class="fa-solid fa-trash-can"></i></a>
                </td>

            </tr>
            <?php
            }}else{
        ?>
            <tr>
                <td colspan="8" align="center">Data Kosong</td>
            </tr>
            <?php
        }
        ?>
        </table>
    </section>
</body>

</html>