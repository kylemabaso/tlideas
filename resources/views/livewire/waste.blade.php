<div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-hover mb-3">
                                <thead class="bg-gray-300">
                                <tr>
                                    <th scope="col">Waste Type</th>
                                    <th scope="col">Treatment</th>
                                    <th scope="col">Bin Location</th>
                                    <th scope="col">Bin Size</th>
                                    <th scope="col">Bin Qty</th>
                                    <th scope="col">Mass Kg</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($manifestWaste as $index => $waste)
                                    <tr>
                                        <th scope="row">
                                            <select name="manifestWaste[{{$index}}][waste_type_id]"
                                                    wire:model="manifestWaste.{{$index}}.waste_type_id"
                                                    class="form-control form-control-rounded">
                                                <option value="">Type</option>
                                                @foreach ($wasteTypes as $wasteType)
                                                    <option value="{{ $wasteType->id }}">
                                                        {{ $wasteType->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </th>
                                        <td>
                                            <input type="text"
                                                   name="manifestWaste[{{$index}}][treatment]"
                                                   class="form-control form-control-rounded"
                                                   placeholder="Treatment"
                                                   wire:model="manifestWaste.{{$index}}.treatment" />

                                            @error('manifestWaste[{{$index}}][treatment]"')
                                            <p class="danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                        <td>
                                            <input type="text"
                                                   name="manifestWaste[{{$index}}][bin_location]"
                                                   class="form-control form-control-rounded"
                                                   placeholder="Bin Location"
                                                   wire:model="manifestWaste.{{$index}}.bin_location" />

                                            @error('manifestWaste[{{$index}}][bin_location]"')
                                            <p class="danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                        <td>
                                            <input type="text"
                                                   name="manifestWaste[{{$index}}][bin_size]"
                                                   class="form-control form-control-rounded"
                                                   placeholder="Bin Size"
                                                   wire:model="manifestWaste.{{$index}}.bin_size" />

                                            @error('manifestWaste[{{$index}}][bin_size]"')
                                            <p class="danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                        <td>
                                            <input type="number"
                                                   name="manifestWaste[{{$index}}][bin_qty]"
                                                   class="form-control form-control-rounded"
                                                   placeholder="Bin Qty"
                                                   wire:model="manifestWaste.{{$index}}.bin_qty" />

                                            @error('manifestWaste[{{$index}}][bin_qty]')
                                            <p class="danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                        <td>
                                            <input type="number"
                                                   name="manifestWaste[{{$index}}][mass_kg]"
                                                   class="form-control form-control-rounded"
                                                   placeholder="Mass (Kg)"
                                                   wire:model="manifestWaste.{{$index}}.mass_kg" />

                                            @error('manifestWaste[{{$index}}][mass_kg]')
                                            <p class="danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-secondary float-right"
                                                wire:click.prevent="removeWaste({{$index}})"
                                            >Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button class="btn btn-primary float-right mb-4"
                                wire:click.prevent="addWaste"
                            >+ Add Waste</button>
                        </div>
{{--                        <div class="col-md-12">--}}
{{--                            <div class="invoice-summary invoice-summary-input float-right">--}}
{{--                                <p>Total Mass: <span>1200</span></p>--}}
{{--                                <h5 class="font-weight-bold d-flex align-items-center">Tonnage Charged:--}}
{{--                                    <span>--}}
{{--                                        1320 Tons--}}
{{--                                    </span>--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

