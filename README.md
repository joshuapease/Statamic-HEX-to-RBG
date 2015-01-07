#Statamic HEX to RBG

A simple modifier that converts a HEX value to a comma separated RBG string.

Quite helpful when used with the color fieldtype.

It accepts both 3 and 6 character HEX values.

###Usage
This modifier accepts two optional paremeters. The first is an alpha level and returns `rgba( )`. Set the second paremeter to `raw` if you wish to prevent `rgb()` or `rgba()` from being added to the string.

```
{{ color_field|hexrgb }}
```
`returns rgb(12,34,56);`

```
{{ color_field|hexrgb:.78 }}
```
`returns rgba(12,34,56,.78)`

```
{{ color_field|hexrgb:1:raw }}
```
`returns 12,34,56,1`
