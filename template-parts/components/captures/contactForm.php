<form class="<?php if(array_key_exists("classes", $args) === true) { esc_html_e($args["classes"]); } ?>" action="#" method="post" onSubmit="(e) => { e.preventDefault(); }">
  <div class="grid grid-cols-2 grid-rows-6 gap-2 mb-4">
    <input class="w-full text-[14px] px-4 py-3 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="firstName" placeholder="First Name" required />
    <input class="w-full text-[14px] px-4 py-3 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="lastName" placeholder="Last Name" required />
    <input class="col-span-2 text-[14px] px-4 py-3 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="email" placeholder="Email" required />
    <input class="w-full text-[14px] px-4 py-3 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="organization" placeholder="Organization" required />
    <input class="w-full text-[14px] px-4 py-3 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="jobTitle" placeholder="Job Title or Role" required />
    <select class="w-full text-[14px] px-4 py-3 border border-[#939E9E] rounded" name="interestedIn" id="interestedIn" required>
      <option selected disabled>What are you interested in?</option>
    </select>
    <select class="w-full text-[14px] px-4 py-3 border border-[#939E9E] rounded" name="hearAboutUs" id="hearAboutUs" required>
      <option selected disabled>How did you find out about us?</option>
    </select>
    <textarea class="col-span-2 row-span-2 text-[14px] px-4 py-3 border border-[#939E9E] placeholder-[#808080] rounded resize-none" name="description" id="description" placeholder="How can we help?"></textarea>
  </div>
  <div class="flex items-center mb-4">
    <input class="w-5 h-5 border border-[#939E9E] rounded mr-2 cursor-pointer" type="checkbox" name="optIn" id="optIn" />
    <label for="optIn" class="text-xs cursor-pointer">
      <span class="text-[#4d4d4d]">I'd like to receive emails from Disruption Advisors.</span>
      <a href="#" target="_blank" rel="noopener" class="font-semibold text-[#017381] hover:underline">Privacy Policy</a>
    </label>
  </div>
  <button role="submit" class="w-full lg:w-auto bg-[#C63732] hover:bg-red-700 text-white text-center px-4 py-3 rounded">Submit</button>
</form>