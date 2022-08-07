<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Brainsoft</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="app">
        <header>
            <div class="navbar-wrapper">
                <div class="navbar-container  h-12 pr-12 pl-12 pt-8 w-full">
                    <div class="navbar-logo"><img src="connexsoftlogo.png" alt="logo" class="h-[70px]"></div>
                    <div class="navbar-menu hidden md:block lg:block">
                        <ul>
                            <li>
                                <div class="ask hover:-translate-y-2 duration-300"><a href="">About</a></div>
                            </li>
                            <li>
                                <div class="ask hover:-translate-y-2 duration-300"><a href="#">Ask Question</a>
                                </div>
                            </li>

                            <li>
                                <div class="ask hover:-translate-y-2 duration-300"><a href="">Sign In</a></div>
                            </li>
                            <li>
                                <div
                                    class="ask hover:-translate-y-2 duration-300  bg-[#208bc1] p-2 rounded-2xl text-slate-100 ">
                                    <a class="join" href="">Join
                                        For Free</a>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </header>
        <main class="mt-[200px]">
            <div class=" title pr-12 pl-12 mt-[4rem] flex justify-evenly">
                <h1 class="text-[4rem] font-bold">Malu Bertanya,<span><br>Stuck Selamanya</span></h1>
                <div class="title-ilustration -mt-[50px]">
                    <img src="images/ilustration.png" alt="ilustration" class="h-[280px] hidden lg:block">
                </div>
            </div>
            <div class="earn mt-[9rem]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#208bc1" fill-opacity="1"
                        d="M0,64L48,80C96,96,192,128,288,133.3C384,139,480,117,576,122.7C672,128,768,160,864,154.7C960,149,1056,107,1152,85.3C1248,64,1344,64,1392,64L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                    </path>
                </svg>
                <div class="earn-contain h-[30rem] bg-[#208bc1]">
                    <div class="description flex justify-start ml-[9.3rem]">
                        <div class="description-title">
                            <h1 class="text-zinc-300 font-bold text-[3rem]">Why ConnexsoftForum?</h1>
                            <ul class="description-check">
                                <li>
                                    <div class="trusted flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"
                                            FILL="#F2DF3A">
                                            <path
                                                d="M24 44q-4.25 0-7.9-1.525-3.65-1.525-6.35-4.225-2.7-2.7-4.225-6.35Q4 28.25 4 24q0-4.2 1.525-7.85Q7.05 12.5 9.75 9.8q2.7-2.7 6.35-4.25Q19.75 4 24 4q3.75 0 7 1.2t5.85 3.3l-2.15 2.15q-2.2-1.75-4.9-2.7Q27.1 7 24 7q-7.25 0-12.125 4.875T7 24q0 7.25 4.875 12.125T24 41q7.25 0 12.125-4.875T41 24q0-1.5-.225-2.925-.225-1.425-.675-2.775l2.3-2.3q.8 1.85 1.2 3.85.4 2 .4 4.15 0 4.25-1.55 7.9-1.55 3.65-4.25 6.35-2.7 2.7-6.35 4.225Q28.2 44 24 44Zm-2.95-10.9-8.25-8.3 2.25-2.25 6 6 20.7-20.7 2.3 2.25Z" />
                                        </svg>
                                        <h3 class="text-3xl mt-2 ml-2 text-slate-200 font-semibold ">Ask Your Question
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="trusted flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"
                                            FILL="#F2DF3A">
                                            <path
                                                d="M24 44q-4.25 0-7.9-1.525-3.65-1.525-6.35-4.225-2.7-2.7-4.225-6.35Q4 28.25 4 24q0-4.2 1.525-7.85Q7.05 12.5 9.75 9.8q2.7-2.7 6.35-4.25Q19.75 4 24 4q3.75 0 7 1.2t5.85 3.3l-2.15 2.15q-2.2-1.75-4.9-2.7Q27.1 7 24 7q-7.25 0-12.125 4.875T7 24q0 7.25 4.875 12.125T24 41q7.25 0 12.125-4.875T41 24q0-1.5-.225-2.925-.225-1.425-.675-2.775l2.3-2.3q.8 1.85 1.2 3.85.4 2 .4 4.15 0 4.25-1.55 7.9-1.55 3.65-4.25 6.35-2.7 2.7-6.35 4.225Q28.2 44 24 44Zm-2.95-10.9-8.25-8.3 2.25-2.25 6 6 20.7-20.7 2.3 2.25Z" />
                                        </svg>
                                        <h3 class="text-3xl mt-2 ml-2 text-slate-200 font-semibold ">Get help from the
                                            community</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="trusted flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"
                                            FILL="#F2DF3A">
                                            <path
                                                d="M24 44q-4.25 0-7.9-1.525-3.65-1.525-6.35-4.225-2.7-2.7-4.225-6.35Q4 28.25 4 24q0-4.2 1.525-7.85Q7.05 12.5 9.75 9.8q2.7-2.7 6.35-4.25Q19.75 4 24 4q3.75 0 7 1.2t5.85 3.3l-2.15 2.15q-2.2-1.75-4.9-2.7Q27.1 7 24 7q-7.25 0-12.125 4.875T7 24q0 7.25 4.875 12.125T24 41q7.25 0 12.125-4.875T41 24q0-1.5-.225-2.925-.225-1.425-.675-2.775l2.3-2.3q.8 1.85 1.2 3.85.4 2 .4 4.15 0 4.25-1.55 7.9-1.55 3.65-4.25 6.35-2.7 2.7-6.35 4.225Q28.2 44 24 44Zm-2.95-10.9-8.25-8.3 2.25-2.25 6 6 20.7-20.7 2.3 2.25Z" />
                                        </svg>
                                        <h3 class="text-3xl mt-2 ml-2 text-slate-200 font-semibold ">Find Expert
                                            Explanations</h3>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="description-ilustration">
                            <img src="images/dudungxrpl.png" alt="deskilu" class="-my-[80px]">
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <div class="blank mb-[1200px]"></div>

    </div>


</body>

</html>
