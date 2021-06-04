<table class="table table-comments">
    <thead class="thead-lightorange">
    <tr >
        <th scope="col" class="font-size-16"></th>
        <th scope="col" class="font-size-16">Product</th>
        <th scope="col" class="font-size-16">Delete</th>
        <th scope="col" colspan="2" class="text-strong text-right pr-1 font-size-16">
            <span>Sort By</span>
            <select>
                <option>My Comments</option>
                <option>Product Comments</option>
                <option>From Store</option>
            </select>
        </th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <th scope="row"><input type="checkbox" name=""></th>
        <td class="d-flex flex-nowrap ">
            <div class="product-img"><img src="{{asset('assets/images/andrijana1.png')}}"></div>
            <div class="product-info pl-2">
                <p class="text-capitalize sml-caps text-strong mb-0">Handemade name</p>
                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </div>
            </div>
        </td>
        <td>

        </td>
        <td class="text-right">
            <div class="comment-date font-size-16">18/02/2020</div>
            <div class="comment-time font-size-16">14:15</div>
        </td>
        <td class="text-right">
            <button class="edit-comment text-strong">Edit</button>
            <p></p>
            <button class="delete-comment text-strong">Delete</button>
        </td>
    </tr>
    <tr>
        <th scope="row"><input type="checkbox" name=""></th>
        <td class="d-flex flex-nowrap ">
            <div class="product-img"><img src="{{asset('assets/images/andrijana1.png')}}"></div>
            <div class="product-info pl-2">
                <p class="text-capitalize sml-caps text-strong mb-0">Handemade name</p>
                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </div>
            </div>
        </td>
        <td>

        </td>
        <td class="text-right">
            <div class="comment-date">18/02/2020</div>
            <div class="comment-time">14:15</div>
        </td>
        <td class="text-right">
            <button class="edit-comment text-strong">Edit</button>
            <p></p>
            <button class="delete-comment text-strong">Delete</button>
        </td>
    </tr>
    </tbody>
</table>

<div class="row mt-5 mb-5 page-row">

    <nav aria-label="Page navigation example ml-auto mr-auto" id="comment-pages">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">52</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
