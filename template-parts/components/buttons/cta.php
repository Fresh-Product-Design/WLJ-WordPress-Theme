<?php
  $buttonStyles = "inline-block bg-[#C63732] hover:bg-red-700 font-bold text-white text-center px-4 py-3 rounded whitespace-nowrap cursor-pointer";
  // Addt Styles Check
  $buttonStyles .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
  // Role set
  $role = array_key_exists("role", $args) ? $args["role"] : "button";
  // Tag Name
  $tag = $role === "submit" ? "button" : "a";
  // Tag Attrs
  $attrs = array(
    sprintf('role="%s"', $role),
    sprintf('class="%s"', $buttonStyles)
  );
  // Attr js-hook Check
  $attrs[] = array_key_exists("js-hook", $args) ? sprintf('data-js="%s"', $args["js-hook"]) : "";
  // Attr reason
  $attrs[] = array_key_exists("contact-reason", $args) ? sprintf('data-reason="%s"', $args["contact-reason"]) : "";
  // Attr href Check
  $attrs[] = array_key_exists("href", $args) ? sprintf('href="%s"', $args["href"]) : "";
  // Attr target Check
  $attrs[] = array_key_exists("target", $args) ? sprintf('target="%s"', $args["target"]) : (array_key_exists("href", $args) ? sprintf('target="%s"', "_blank") : "");
  $attrsString = implode(" ", $attrs);

  // <a href=""...>Link Label</a>
  // <button role=""...>Button Label</button>
  $startTag = sprintf("<%s ".$attrsString.">", $tag);
  $endTag = sprintf("</%s>", $tag);
  print($startTag.$args["label"].$endTag);
?>