 

         </div>
      </div>
</div>
<script type="text/javascript">
   $(document).ready(function() {
     $('.ui.dropdown').dropdown();
     $('.sidebar-menu-toggler').click(function() { 
       var target = $(this).data('target');
       $(target)
         .sidebar({
           dinPage: true,
           transition: 'overlay',
           mobileTransition: 'overlay'
         })
         .sidebar('toggle');
         return false;
     });

   });
</script>
</body>
</html>