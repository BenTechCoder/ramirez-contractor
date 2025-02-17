<?php

/**
 * Template part for displaying the Hero
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<!-- TODO: iMAGE DECIDED FROM CUSTOMIZER and default value -->

<section class="hero m-0 w-full bg-[url(http://ramirez-contractor.local/wp-content/uploads/2025/01/man-working-steel-fatory-equipment-steel-production-darker.webp)] bg-cover p-0 py-xl-2xl">
    <div class="wrapper">
        <div class="flex flex-wrap justify-evenly gap-xs-s">
            <div class="hero__text text-light">
                <p class=" font-display text-[length:var(--wp--preset--font-size--step-6)] "><span class="text-secondary">YOUR MISSION.</span></p>
                <p class=" font-display text-[length:var(--wp--preset--font-size--step-6)] ">OUR WORKERS</p>
                <h1 class="font-body text-[length:var(--wp--preset--font-size--step-1)]">Labor Contracting in North Carolina</h1>
            </div>
            <form action="" class="hero__form hidden bg-primary p-s-m shadow-xl md:block">
                <div class="grid">
                    <div class="flex flex-col">
                        <label for="name" class="text-light">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="text-light">Email</label>
                        <input type="email" name="Email" id="email">
                    </div>

                    <div class="flex flex-col">
                        <label for="tel" class="text-light">Phone Number</label>
                        <input type="tel" name="Phone Number" id="tel">
                    </div>

                    <div class="flex flex-col">
                        <label for="company" class="text-light">Company</label>
                        <input type="text" name="Company Name" id="company">
                    </div>

                    <div class="flex flex-col">
                        <label for="workers" class="text-light"># Of Workers</label>
                        <input type="number" min="1" max="500" name="Number Of Workers" id="workers">
                    </div>

                    <div class="flex flex-col">
                        <label for="industry" class="text-light">Industry</label>
                        <input type="text" name="Industry" id="industry">
                    </div>

                    <div class="form-message flex flex-col">
                        <label for="message" class="text-light">Message</label>
                        <textarea name="" id="message" cols="30" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn col-[2] bg-tertiary p-2 text-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>