<% if $Title && $ShowTitle %><h2 class="element__title">$Title</h2><% end_if %>
<% if $Content %><div class="element__content">$Content</div><% end_if %>

<% if $Code %>
    <div class="row element__embedded__code">
        <div class="col-md-12 element__embedded__code__code">
            $Code
        </div>
    </div>
<% end_if %>
