# Simple Blog
Blog plugin for [Typesetter CMS](https://github.com/Typesetter/Typesetter)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Typesetter/Simple-Blog/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Typesetter/Simple-Blog/?branch=master)


I wanted to modify SimpleBlog so that ArchiveGadget will display the years and months in collapsed form, and at the click open the years, months and then posts. My idea was taken from

https://stackoverflow.com/questions/31508500/dead-simple-collapsable-list-function-for-deep-and-shallow-nested-ul-li-lists-j

with an example on

https://jsfiddle.net/ufb9q3n3/

Unfortunately, this approach requires the modification of the original generator code in php, which is difficult to achieve.
After careful documentation we discovered on stackoverflow that modern browsers allow a smarter approach to the situation:

https://stackoverflow.com/questions/15095933/pure-css-collapse-expand-div

Without jquery, without too many code changes!

Unfortunately, this solution does not work well for browsers that have not implemented the <i>details</i> and <i>summary</i> tags.
Another solution, using jquery, was suggested by Juergen and will be available soon as an update (3.0.5) to the Simple Blog plugin on the Typesetter [site](https://www.typesettercms.com/Plugins/17_Simple_Blog).
This solution is deprecated.
