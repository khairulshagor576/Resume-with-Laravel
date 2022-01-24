<x-layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="content">
        <div class="mt-5">
            <div class="text-center">
            <img src="{{ asset('images/khairul_profile.jpg') }}" alt="" height="150" width="250" class="img-thumbnail">
            </div>
            <div class="mt-5 text-white mx-5 text-justify">
               <h1 class="fw-bold fontName">Hello,</h1>
               <div class="px-4 ">
                   <p class="textIndent">I am <b class="text-warning">Mohammad Khairul Islam</b> 5 years of full-stack web development for global business, I offer the technical expertise you are seeking for your web developer position.</p>
                   <p>I started working as a Developer in <b class="text-warning">Logic Software Limited</b> in 2018. I am still working here as a Software Engineer. I am currently working on their HR & Payroll (Platform) where I have to develop various new reports and pages as per the need of the customer care team. I also have to modify the existing features as asked in raw PHP.</p>
               </div>
               <div class="text-center">
                <a href="{{ url('/contact') }}"  class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
                <a href="{{ url('/contact') }}" class="btn btn-outline-info">Contact</a>
               </div>
            </div>
        </div>
    </x-slot>
</x-layout>