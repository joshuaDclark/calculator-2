<div class="grid my-48 place-items-center">
    
<div class="box-content h-full pb-4 bg-white border-2 rounded border-heather place-content-center w-96">
    
    <img class="mx-auto my-8" src="{{ asset('img/Piedmont_Logo_No Tagline.png') }}" alt="description of myimage">
       
    <h1 class="py-4 mt-8 text-center text-black bg-gray-200 text-4x1 font bold">Sheet Weight Conversion Calculator</h1>
    
    <!-- weight indicator -->
    
    <label><h2 class="mt-5 text-lg font-light text-center text-slate-500"> Weight</h2> </label>
    <label><h2 class="mt-0 mb-2 text-6xl font-semibold text-center text-slate-500"> 0 </h2> </label>
    
         
    
   <div>
       
    <!-- Material Dropdown -->
    
    <div class="mx-2 mt-22">

    <form>
        <label class="font-semibold"> Material
        <select class="block w-full p-4 px-3 m-0 text-base font-normal text-black transition ease-in-out bg-white bg-no-repeat border border-solid rounded appearance-none form-select bg-clip-padding border-heather focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Select a Material" wire:model="material">
       
            <option value="aa" selected>Choose a material</option>
            <option value="a" selected>ABS</option>
            <option value="b" selected>Acetal</option>
            <option value="c" selected>Arcrylic</option>
            <option value="d" selected>Arcrylic Mirror</option>
            <option value="e" selected>PETG</option>
            <option value="f" selected>Polycarbonate</option>
            <option value="g" selected>Polypropylene</option>
            <option value="h" selected>Styrene</option>
            <option value="i" selected>Teflon</option>
            <option value="j" selected>PVC Type</option>
            <option value="k" selected>PVC Foam Sheet</option>
            <option value="l" selected>UHMW</option>
        </select>   
        </label> 
        </div>


    <!-- integer inputs -->
<div class="grid grid-cols-2 grid-rows-2 mx-2 gap-x-2 gap-y-3">
   <div> <label class="font-semibold"> Length
    <input class="block w-full p-4 text-base font-normal text-center text-black transition ease-in-out bg-white bg-no-repeat border border-solid rounded px bg-clip-padding border-heather" wire:model="length" type="integer" />
    </label></div>
    
    <div><label class="font-semibold"> Width
        <input class="block w-full p-4 mx-0 text-base font-normal text-center text-black transition ease-in-out bg-white bg-no-repeat border border-solid rounded px bg-clip-padding border-heather" wire:model="width" type="integer" />
        </label></div>

    

    <div>
    <label class="font-semibold"> Thickness (0.25)
            <input class="block w-full p-4 mx-0 text-base font-normal text-center text-black transition ease-in-out bg-white bg-no-repeat border border-solid rounded px bg-clip-padding border-heather" wire:model="thickness" type="integer" />
            </label>
        </div>
    
    <div>
    <button type="submit"
    data-mdb-ripple="true"
    data-mdb-ripple-color="light"
    class="block w-full p-4 mt-6 font-medium text-white transition duration-150 ease-in-out border border-solid rounded bg-sky-500 hover:bg-sky-300 hover:shadow-lg focus:bg-sky-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-300 active:shadow-lg">Calculate</button>
    </div>


            </form>
          </div>
        </div>
      </div>
    </form>
</div>
    </div>
</div>    

</div>
  

  