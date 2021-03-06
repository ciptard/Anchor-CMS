/**
 *    Anchor CMS' default theme
 *    by @anchorcms and @visualidiot
 */

//  Try to load Typekit (if it's there)
try { Typekit.load(); } catch(e) { }

//  Load the actual jQuery scripts
$(function() {
    var body = $('body'),
        viewport = $(window),
        search = $('#search'),
        toggleSearch = function() {
            //  Toggle the search box
            search.toggleClass('focus');
            
            //  And stop it "autofocusing".
            return false;
        };
        
    body.addClass('js');
    
    search.find('input').focus(toggleSearch).blur(toggleSearch);
});