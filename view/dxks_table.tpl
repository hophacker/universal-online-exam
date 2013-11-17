{* customized table in party testing system by fengjie *} 




<table>
{section name=record loop=$contents} 
    <tr bgcolor='#B9DCFF'> 
        {section name=entry loop=$contents[record]} 
            <td align='center'>{$contents[record][entry]}</td> 
        {/section} 
    </tr> 
{/section} 
</table>
