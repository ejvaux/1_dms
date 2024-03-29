<div class="card">
    <div class="card-header"><span class='text-muted font-weight-bold'>SUMMARY TABLE</span></div>
    <div class="card-body p-0">        
        <table class="table table-bordered table-sm m-0" id="myTable">
            <thead class="thead-light">
                <tr>
                    <th>LOCATION</th>
                    <th>DANPLA QTY</th>
                    {{-- <th>CURRENT LOCATION</th> --}}
                </tr>
            </thead>
            <tbody>
                @if (count($data5)>0)
                    @foreach($data5 as $data)                                        
                        <tr>
                            <td>{{ $data->location}}</td>
                            <td>{{ $data->total }}</td>                                                                                
                        </tr>           
                    @endforeach
                    <tr>
                        <td><span class="font-weight-bold">TOTAL:</span></td>
                        <td>
                            {{$summary_total}}
                        </td>                                                                                
                    </tr>               
                @else
                    <p>No Data Found.</p>
                @endif                
            </tbody>
        </table>        
    </div>
</div>