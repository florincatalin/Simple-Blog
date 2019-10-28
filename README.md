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
Here is the code:

```
  <Details>
<summary> This is what you want to show before expanding </summary>
<p> This is where you put the details that are shown once expanded </p>
</ Details>
```

Here is demo:


<Details>
<summary> This is what you want to show before expanding </summary>
<p> This is where you put the details that are shown once expanded </p>
</ Details>

