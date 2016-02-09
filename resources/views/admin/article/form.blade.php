
    <tr><td style="width: 200px;;">Title</td>
        <td>{!! Form::text('title', null, ['class'=>'form-control'] ) !!}</td>
    </tr>
    <tr><td style="width: 200px;;">Sub Title</td>
        <td>{!! Form::text('subtitle', null, ['class'=>'form-control'] ) !!}</td>
    </tr>
    <tr><td style="width: 200px;;">Slug</td>
        <td>{!! Form::text('slug', null, ['class'=>'form-control'] ) !!}</td>
    </tr>
    <tr><td style="width: 200px;;">Content</td>
        <td><textarea name="content" rows="6"
                      class="ckeditor form-control"></textarea></td>
    </tr>
    <tr><td style="width: 200px;;">Meta Description</td>
        <td>{!! Form::textarea('meta_description', null, ['class'=>'form-control'] ) !!}</td>
    </tr>
    <tr><td style="width: 200px;;">Link Youtube</td>
        <td>{!! Form::text('content_html', null, ['class'=>'form-control'] ) !!}</td>
    </tr>
    <tr><td style="width: 200px;;">Link URL</td>
        <td>{!! Form::text('url', null, ['class'=>'form-control'] ) !!}</td>
    </tr>
    <tr><td>Category</td>
        <td>{!! Form::select('category_id', App\Category::lists('title', 'id'), null, ['class'=>'form-control']) !!}</td>
    </tr>
    <tr><td>Tag</td>
        <td>
            <select name="tags[]" id="tags" class="form-control" multiple>
            @foreach (App\Tag::all() as $tag)
                    <option  value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach

            </select>
        </td>
    </tr>
    <tr><td>Foto</td><td>{!! Form::file('picture',null,['class'=>'form-control']) !!}</td></tr>

