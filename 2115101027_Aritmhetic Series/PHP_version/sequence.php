<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
</head>
<?php
    if(isset($_GET['submit'])){        
        $first = $_GET["firstnum"];
        $gap = $_GET["range"];
        $result = array();
        for ($i = 1;$i <=10;$i++) {
            $result[$i] = $first +($i-1)* $gap;
        }
    }
    if(!isset($result)){
        for ($i = 1;$i <=10;$i++) {
            $result[$i]='-';
        }
    }
    if(!isset($first)){
        $first ='';
    }
    if(!isset($gap)){
        $gap ='';
    }
?>
<body>
    <!--Header Start-->
    <header class=" fixed top-0 left-0 w-full flex items-center z-10 border-pri bg-white border-primaryblue border-b-2 shadow-lg">
            <div class="flex items-center bg-white justify-between relative w-full ">
                <div class="px-4 hover:shadow-md ">
                    <a href="#home" class="flex items-center py-2 px-2">
                        <img src="dist/img/undiksha.png" alt="Logo Undiksha" class="h-16x w-16 mr-6" />
                        <span class="font-bold text-black-500 text-lg my-3">ARITMHETIC SEQUENCE</span>
                    </a>  
                </div>
                <div class="flex items-center px-3">
                    <button id="menu" name="menu" type="button" class="block absolute right-4 lg:hidden">
                        <span class="menu-line "></span>
                        <span class="menu-line transition duration-300 ease-in-out"></span>
                        <span class="menu-line "></span>
                    </button>
                    <nav id="navbarmenu" class="hidden absolute bg-white rounded-lg shadow-lg max-w-[250px] w-full right-4 top-full lg:bg-none lg:shadow-none lg:rounded-none lg:static lg:max-w-full lg:block  ">
                        <ul class="block lg:flex "> 
                            <li class="group">
                                <a href="#home" class=" text-black font-bold  py-2 mx-8 flex group-hover:text-second ">Homepage</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-black font-bold py-2 mx-8 flex group-hover:text-second ">About Me</a>
                            </li>
                            <li class="group">
                                <a href="#input" class="text-black font-bold py-2 mx-8 flex group-hover:text-second ">Input</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>
    <!--Header End-->
    
    <!--Content start-->
    <section id="home" class="pt-36 pb-16">
        <div class="container">
            <div class="w-full px-4 ">
                <div class="max-w-xl mx-auto text-center mb-16 ">
                    <h4 class="font-semibold text-3xl text-primaryblue mb-2">Aritmhetic Sequence</h4>
                    <p class="font-medium text-md text-dark ">An arithmetic series/sequence can also be interpreted as a sequence in which the value of all the terms is obtained by adding or subtracting the previous term with a number.</p>
                </div>
            </div>

            <div class="w-full px-4 flex flex-wrap justify-center xl:mx-auto">
                <form action="sequence.php" method="get" class="group mb-1 p-4  items-center  md:flex md:justify-center ">
                    <div class="w-full mb-4 m-3 mx-5">
                        <h2 class="text-lg text-primaryblue font-bold text-dark mb-4">Input First Number</h2>
                        <input type="text" name="firstnum" id="firstnum" value="<?=$first?>" class=" bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56
                        focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none">
                    </div>
                    <div class="w-full mb-5 m-3 mx-5">
                        <h2 class="text-lg text-primaryblue font-bold text-dark mb-4">Range Beetwen Number</h2>
                        <input type="text" name="range" id="range" value="<?=$gap?>" class="bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue  focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none">
                    </div>
                    <div class="w-full mb-5 m-3 mx-5 mt-6">
                        <input type="submit" name="submit" class="font-bold mt-8 bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue  focus:ring-1 hover:bg-primaryblue focus:ring-primary focus:outline-none">
                    </div>
                </form>
                <div class="w-full mb-8 flex text-center flex-col items-center justify-center lg">
                    
                        <h2 class="left-0 text-2xl text-black font-bold text-dark mb-6">Result Of Sequence Number</h2>
                        <div class="flex justify-between w-2/5 my-3">
                            <h3 class="text-xl text-primaryblue font-bold text-dark mb-4 mr-10 ">1st Sequence</h3>
                            <input type="text" name="result" id="result" value="<?=$result[1]?>" readonly class="font-bold bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none ">
                        </div>
                        <div class="flex justify-between w-2/5 my-3">
                            <h3 class="text-xl text-primaryblue font-bold text-dark mb-4 mr-10 ">2nd Sequence</h3>
                            <input type="text" name="result" id="result" value="<?=$result[2]?>" readonly class="font-bold bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none ">
                        </div>
                        <div class="flex justify-between w-2/5 my-3">
                            <h3 class="text-xl text-primaryblue font-bold text-dark mb-4 mr-10 ">3rd Sequence</h3>
                            <input type="text" name="result" id="result" value="<?=$result[3]?>" readonly class="font-bold bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none ">
                        </div>
                        <div class="flex justify-between w-2/5 my-3">
                            <h3 class="text-xl text-primaryblue font-bold text-dark mb-4 mr-10 ">4th Sequence</h3>
                            <input type="text" name="result" id="result" value="<?=$result[4]?>" readonly class="font-bold bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none ">
                        </div>
                        <div class="flex justify-between w-2/5 my-3">
                            <h3 class="text-xl text-primaryblue font-bold text-dark mb-4 mr-10 ">5th Sequence</h3>
                            <input type="text" name="result" id="result" value="<?=$result[5]?>" readonly class="font-bold bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none ">
                        </div>
                        <div class="flex justify-between w-2/5 my-3">
                            <h3 class="text-xl text-primaryblue font-bold text-dark mb-4 mr-10 ">6th Sequence</h3>
                            <input type="text" name="result" id="result" value="<?=$result[6]?>" readonly class="font-bold bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none ">
                        </div>
                        <div class="flex justify-between w-2/5 my-3">
                            <h3 class="text-xl text-primaryblue font-bold text-dark mb-4 mr-10 ">7th Sequence</h3>
                            <input type="text" name="result" id="result" value="<?=$result[7]?>" readonly class="font-bold bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none ">
                        </div>
                        <div class="flex justify-between w-2/5 my-3">
                            <h3 class="text-xl text-primaryblue font-bold text-dark mb-4 mr-10 ">8th Sequence</h3>
                            <input type="text" name="result" id="result" value="<?=$result[8]?>" readonly class="font-bold bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none ">
                        </div>
                        <div class="flex justify-between w-2/5 my-3">
                            <h3 class="text-xl text-primaryblue font-bold text-dark mb-4 mr-10 ">9th Sequence</h3>
                            <input type="text" name="result" id="result" value="<?=$result[9]?>" readonly class="font-bold bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none ">
                        </div>
                        <div class="flex justify-between w-2/5 my-3">
                            <h3 class="text-xl text-primaryblue font-bold text-dark mb-4 mr-10">10th Sequence</h3>
                            <input type="text" name="result" id="result" value="<?=$result[10]?>" readonly class="font-bold bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Content end-->

    <!-- footer start -->
    <footer class="w-full bg-blue-900 pt-16 pb-12 ">
        <div class="container ">

        <div class="flex flex-wrap">
            <div class=" w-full px-10 mb-12 text-white font-medium md:w-1/2">
                <h2 class="font-bold text-2xl mb-5">Aritmhetic Sequence</h2>
                <h3 class="font-bold text-xl mb-2">Contact us</h3>

                <a href="#home" class="flex items-center py-1 px-2 hover:text-second">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 32 32"
                    style=" fill:white;"><path d="M 6 7.03125 C 5.691406 7.03125 5.402344 7.089844 5.125 7.175781 L 8.039063 9.03125 L 23.960938 9.03125 L 26.875 7.175781 C 26.597656 7.089844 26.308594 7.03125 26 7.03125 Z M 4.113281 7.71875 C 3.4375 8.269531 3 9.097656 3 10.03125 L 3 23.03125 C 3 24.683594 4.347656 26.03125 6 26.03125 L 26 26.03125 C 27.652344 26.03125 29 24.683594 29 23.03125 L 29 10.03125 C 29 9.097656 28.5625 8.269531 27.886719 7.71875 L 16 15.28125 Z M 6 12.445313 L 16 18.8125 L 26 12.445313 L 26 24.03125 L 6 24.03125 Z"></path></svg>
                    <span class="font-bold text-black-500 text-lg my-3  px-3">joe@undiksha.ac.id</span>
                    <!--<img src="dist/img/undiksha.png" alt="logo Undiksha">-->
                </a>  
                <a href="#home" class="flex items-center py-1 px-2 hover:text-second">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512" style=" fill: white"><title>ionicons-v5_logos</title><path d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"/><path d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"/><path d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"/></svg>
                    <span class="font-bold text-black-500 text-lg my-3 px-3 ">@joevaandyta</span>
                    <!--<img src="dist/img/undiksha.png" alt="logo Undiksha">-->
                </a>  
                <h4 class="mt-"></h4>
            </div>

            <div class="w-full px-10  md:px-2 md:pt-16 mb-12 md:w-1/2">
                <h3 class="font-semibold text-xl text-white mb-5">Other</h3>
                <ul class="text-slate-300 font-bold">
                    <li>
                    <a href="#" class="inline-block text-base hover:text-second mb-3">Name : Joe Aqilla Vandyta</a>
                    </li>
                    <li>
                    <a href="#" class="inline-block text-base hover:text-second mb-3">NIM : 2115101027</a>
                    </li>
                    <li>
                    <a href="#" class="inline-block text-base hover:text-second mb-3">Class : International Class</a>
                    </li>
                    <li>
                    <a href="#" class="inline-block text-base hover:text-second mb-3">Quote : Force yourself until ****</a>
                    </li>
                </ul>
            </div>

 
        </div>
        <div class="w-full pt-10 border-t  border-black">
            <h4 class="font-bold font-xl px-10 text-white"> &#169; Copyright 2022 | Joe Aqilla Vandyta</h4>
        </div>
        </div>
    </footer>
    <!-- footer end -->


</body>
</html>