$('.skill-per').each(function(){
    let $this =$(this);
    let per = $this.attr('per');
    $this.css("width", per+'%');
    $({animatedValue: 0}).animate({animatedValue: per}, {
        duration: 1000,
        step: function() {
            $this.attr('per', Math.floor(this.animatedValue) + '%');
        },
        complete: function() {
            $this.attr('per', Math.floor(this.animatedValue) + '%');
        }
    });
});