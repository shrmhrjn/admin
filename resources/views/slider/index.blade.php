

<table>
        <thead>
            <th>Image</th>
        </thead>


        <tbody>
            @foreach($slide as $slider)
            <tr>
                <td><img src="{{ asset('backend/slider/'.$slider->image)}}"></td>
            </tr>
            @endforeach
        </tbody>


    </table>
